<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		// responds to GET 'users/'
		$title = "List users";
		$users = User::all();
		//return View::make('users.list', compact('title', 'users'));
	}
	public function postDetails()
	{
		// responds to POST users/details
	}
	public function anyLogin()
	{
		// responds to login for any verb
	}

	public function listUsers()
    {
        // $users = User::all(); ou getIndex()?
        // $title = 'Users List';

        // return view('users.index', compact('title', 'users'));
    }

    public function getAdd() {
    	// Authentication::checkPermission('add');
    	// $title = 'Add user';
    	// $user = new User;
    	// $errors = false;
    	//return View::make('users.add', compact('title', 'user', 'errors'));
    }
    public function postAdd() {
    	// if (isset($_POST['cancel'])) { $this->redirectToHome();}
    	// Authentication::checkPermission('add');
    	// $title = 'Add user';
    	// $user = new User;
    	// $errors = $this->validateInput($user);
    	// if (count($errors)) {
    	// 	return View::make('users.add', compact('title', 'user', 'errors'));
    	// }
    }
    
    public function editUser()
    {
      
    }

    public function deleteUser()
    {

    }
}
