<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Advertisement;
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

        return view('advertisements.add');
    }

     public function store(AdvertisementRequest $request)
    {    
        $advertisement = new Advertisement($request->all());
        
        $request->user()->advertisements()->save($advertisement);
       
        return redirect('advertisements');
    }


    public function show($id)
    {      
        $advertisement = Advertisement::findOrFail($id);
        return view('advertisements.detail',compact('advertisement'));
    }

    public function edit($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        return view('advertisements.edit', compact('advertisement'));
    }

    public function update($id, AdvertisementRequest $request)
    {
        $advertisement = Advertisement::findOrFail($id);

        $advertisement->update($request->all());

        return redirect('advertisements');
    }

     public function destroy($id){

        Advertisement::destroy($id);
        return redirect('advertisements');
    } 

}
