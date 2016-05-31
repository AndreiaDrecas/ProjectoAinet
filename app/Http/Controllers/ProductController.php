<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Advertisement;

class ProductController extends Controller
{
	public function __construct()
	{
		//$this->middleware('auth', ['except' => 'listProducts', 'listDetails']);
	}

    public function listProducts()
    {
        $products = Advertisement::all();
        $title = 'Products List';

        return view('products.index', compact('title', 'products'));
    }


    public function listDetails()
    {
        $products = Advertisement::all();
        $title = 'Products Detail';

        return view('products.detail', compact('title', 'products'));
    }
}

