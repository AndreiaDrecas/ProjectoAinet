<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Advertisement;
use App\Tag;
use App\Comment;
use App\Media;
use App\Http\Requests;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\User;
use DB;
use Illuminate\Support\Facades\File;

class AdvertisementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show','search']]);
    }

    public function index()
    {
        $advertisements=Advertisement::all();
        $advertisementArray =array();
        foreach ($advertisements as $advertisement) {
            if ($this->checkUnblockedUser($advertisement)) {
                array_push($advertisementArray,$advertisement);
            }
        }
    

        //$advertisements = Advertisement::latest('available_on')->available()->get();


        return view('advertisements.list', ['advertisements' => $advertisementArray]);

    }

    public function create()
    {

        $tags = Tag::lists('name', 'id');
        return view('advertisements.add', compact('tags'));
    }

    public function store(AdvertisementRequest $request)
    {

        $advertisement = $this->createAdvertisement($request);
        if($request->hasFile('int_file')){
            $file = $request->file('photo_path');
            $name = $file->getClientOriginalName();
            $file->move('public/images/', $name);       
            $media['photo_path'] = $name;
            $media['advertisement_id'] = $advertisement->id;
            Media::create($media);
        }

        

        \Session::flash('flash_message', 'Your advertisement has been created!');

        return redirect('advertisements');
    }


    public function show(Advertisement $advertisement)
    {
        $user = User::findorfail($advertisement->owner_id);
        $comments = Comment::join('users','comments.user_id','=','users.id')
        ->where('advertisement_id','=',$advertisement->id)
        ->get();
        

        $comments = Comment::with(['user', 'replies'])
             ->where('advertisement_id', $advertisement->id)
             ->where('parent_id', null)->get();



        return view('advertisements.detail',compact('advertisement', 'comments'));
    }

    public function edit(Advertisement $advertisement)
    {
        $tags = Tag::lists('name', 'id');

        return view('advertisements.edit', compact('advertisement','tags'));
    }

    public function update(Advertisement $advertisement, AdvertisementRequest $request)
    {
        $advertisement->update($request->all());
        $this->syncTags($advertisement,$request->input('tag_list'));

        return redirect('advertisements');
    }


    public function destroy(Advertisement $advertisement){
        
        $advertisement->comments()->delete();
        $advertisement->delete();
        return redirect('advertisements');
    }


    private function syncTags(Advertisement $advertisement, array $tags)
    {
        $tagSync = $this->integrityCheckTags($tags);
        $advertisement->tags()->sync($tagSync);
    }

    private function integrityCheckTags($tags){
        $currentTags = array_filter($tags, 'is_numeric');
        $newTags = array_filter($tags, function($item) {
            return !is_numeric($item);
        });

        foreach ($newTags as $newTag) {
            if ($tag = Tag::create(['name' => $newTag])) {
                $currentTags[] = $tag->id;
            }
        }
        return $currentTags;
    }

    private function createAdvertisement(AdvertisementRequest $request)
    {
        $advertisement = $request->user()->advertisements()->create($request->all());

        $this->syncTags($advertisement,$request->input('tag_list'));

        return $advertisement;

    }
    public function block($id)
    {
        $advertisement = Advertisement::findorfail($id);
        $advertisement->blocked = $advertisement->blocked == 1 ? 0 : 1;
        $advertisement->save();

        return redirect('advertisements');
    }

    public function search(Request $request)
    {
        $filter = $request->input('search');
        $advertisements = Advertisement::whereHas('user', function($query) use($filter) {
            $query->where('location', 'LIKE', '%' . $filter . '%')
            ->orWhere('name', 'LIKE', '%' . $filter . '%'); 
        })
        ->orWhere('name', 'LIKE', '%' . $filter . '%')
        ->orWhere('description', 'LIKE', '%' . $filter . '%')->distinct()->get();

        return view('pages.index', compact('advertisements'));
    }

    public function blockedAdvertisements()
    {
        $advertisements=Advertisement::latest('available_on')
        ->where('blocked', '=',1)->get();

        return view('advertisements.blocked',compact('advertisements'));
    }

    public function checkUnblockedUser($advertisement)
    {
        $user = User::findorfail($advertisement->owner_id);
        $user->blocked == 0 ? 0 : 1;

        $user = User::findorfail($advertisement->owner_id);
        return $user->blocked == 0 ? 1 : 0;
    }

}
