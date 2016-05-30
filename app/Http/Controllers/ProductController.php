<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class ProductController extends Controller
{
    public function listProducts()
    {
        $users = Product::all();
        $title = 'List products';

        return view('products.index', compact('title', 'products'));
    }
}
