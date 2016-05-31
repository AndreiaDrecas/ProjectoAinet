<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::auth();

// Route::get('/home', 'HomeController@index');

//product list
Route::get('/products', 'ProductController@listProducts')->name('products.index');
Route::get('/product/detail', 'ProductController@listDetails')->name('products.detail');

Route::controller('users', 'UserController');

//administrator

