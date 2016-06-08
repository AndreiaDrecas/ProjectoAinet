<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Advertisement;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;


class AdvertisementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    public function index()
    {
        //return \Auth::user();

        $advertisements = Advertisement::latest('available_on')->available()->get();     
        return view('advertisements.list', compact('advertisements'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('advertisements.add', compact('tags'));
    }

     public function store(AdvertisementRequest $request)
    {    
        
        $this->createAdvertisement($request);

        \Session::flash('flash_message', 'Your advertisement has been created!');
       
        return redirect('advertisements');
    }


    public function show(Advertisement $advertisement)
    {      
        $tags = Tag::lists('name', 'id');
        return view('advertisements.detail',compact('advertisement','tags'));
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

        $advertisement->delete();
        return redirect('advertisements');
    } 

    private function syncTags(Advertisement $advertisement, array $tags)
    {
        $advertisement->tags()->sync($tags);
    }

    private function createAdvertisement(AdvertisementRequest $request)
    {
        $advertisement = $request->user()->advertisements()->create($request->all());

        $this->syncTags($advertisement,$request->input('tag_list'));

        return $advertisement;
    }

}
