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
        $tags = Tag::lists('name');
        return view('advertisements.add', compact('tags'));
    }

     public function store(AdvertisementRequest $request)
    {    
        
        $request->user()->advertisements()->create($request->all());

        \Session::flash('flash_message', 'Your advertisement has been created!');
       
        return redirect('advertisements');
    }


    public function show(Advertisement $advertisement)
    {      
        return view('advertisements.detail',compact('advertisement'));
    }

    public function edit(Advertisement $advertisement)
    {
        return view('advertisements.edit', compact('advertisement'));
    }

    public function update(Advertisement $advertisement, AdvertisementRequest $request)
    {
        $advertisement->update($request->all());

        return redirect('advertisements');
    }

     public function destroy(Advertisement $advertisement){

        $advertisement->delete();
        return redirect('advertisements');
    } 

}
