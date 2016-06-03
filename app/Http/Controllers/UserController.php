<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    public function index()
    {
        $users = User::latest('created_at')->get();
        return view('users.list', compact('users'));
    }


     public function register()
    {
        return view('register');
    }

    public function getCreate()
    {
        return view('users.add');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        User::create($this);

        return redirect('dashboard/users');

    }

    public function show($id)
    {
        $user = User::findorfail($id);
        return view('users.details', compact('user'));
        
    }

    public function postDelete($id){
        User::destroy($id);
        return redirect('users');
    }    
}
