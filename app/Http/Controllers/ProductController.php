<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Advertisement;

class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except' => 'listProducts',]);
	}

    public function listProducts()
    {
        $products = Advertisement::all();
        $title = 'List products';

        return view('products.index', compact('title', 'products'));
    }
}
