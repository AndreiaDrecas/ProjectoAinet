<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Advertisement;

class DashboardController extends Controller
{   
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::latest('created_at')->take(5)->get();
        $advertisements = Advertisement::latest('created_at')->take(5)->get();

        return view('dashboard.index', compact('users','advertisements'));
    }
}
