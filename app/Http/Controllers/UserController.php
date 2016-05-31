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
	}
	public function postDetails()
	{
		// responds to POST users/details
	}
	public function anyLogin()
	{
		// responds to login for any verb
	}
}
