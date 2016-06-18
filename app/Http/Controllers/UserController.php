<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Advertisement;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin',['except' => ['index', 'blockedUsers']]);
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

    public function create()
    {
        return view('users.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email,'.$request->id,
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
            ]);

        User::create($this);

        return redirect('dashboard/users');
    }

    public function show(User $user)
    {
        
        return view('users.details', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->all());
        
        return redirect('users');
    }

    public function destroy(User $user)
    { 
        
        
        $user->comments()->delete();
        $user->advertisements()->delete();
        $user->delete();
        
        \Session::flash('message','User was deleted');

        return redirect('users');
    }    

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function block(User $user)
    {
        $user->blocked = $user->blocked == 1 ? 0 : 1;
        $user->save();
        return redirect('users');
    }

    public function blockedUsers()
    {
        $users = User::latest('blocked')
        ->where('blocked', '=',1)->get();

        return view('users.blocked', compact('users'));
    }

    public function setAdmin($id)
    {
        $user = User::findorfail($id);
        $user->admin = 1 ? 0 : 1;
        $user->save();
        return redirect('users');

    }

}