<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Bid;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::latest('created_at')->available()->get();
        if (Auth::user() != null){
                $bids = Bid::latest('created_at')->get();
                $user = Auth::user();
                $count=0;
                foreach ($advertisements as $advertisement)
                    if ($advertisement->owner_id == $user->id)
                        foreach($bids as $bid)
                            if ($bid->advertisement_id == $advertisement->id)
                                $count++;
                        }
        return view('pages.index',compact('advertisements','count'));
    }


    public function profile()
    {     
        $user = User::find(Auth::user()->id);
        $advertisements = Advertisement::latest('available_on')->available()->get();    
        return view('pages.profile',compact('user','advertisements'));
    }

     public function profileUser($id)
    {     
        $user = User::find($id);
        $advertisements = Advertisement::latest('available_on')->available()->get();    
        return view('pages.profile',compact('user','advertisements'));
    }

}
