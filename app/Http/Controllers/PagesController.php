<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
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
        return view('pages.index',compact('advertisements'));
    }


     public function profile()
    {     
        $user = User::latest('created_at')->get();

        return view('pages.profile',compact('user'));
    }
}
