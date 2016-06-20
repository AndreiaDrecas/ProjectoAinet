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

Route::resource('advertisements','AdvertisementController');
Route::resource('users','UserController');
Route::resource('comments','CommentController');
Route::resource('bids','BidController');

Route::get('bider/list', 'BidController@showOwnBid');

Route::get('bids/bidAdvertisement/{id}', ['as' => 'bids.bidAdvertisement', 'uses'=>'BidController@bidAdvertisement']);

Route::get('tags', 'TagController@index');

Route::get('profile', [
	'middleware' => 'auth', 
	'uses' => 'PagesController@profile'
	]);

Route::get('profile/{id}', [
	
	'uses' => 'PagesController@profileUser'
	]);

Route::get('dashboard', [
	'middleware' => 'admin', 
	'uses' => 'DashboardController@index'   
	]);


Route::get('/', 'PagesController@index');

Route::post('/users/block/{id}', ['as' => 'users.block', 'uses' =>'UserController@block']);
Route::post('/advertisements/block/{id}', ['as' => 'advertisements.block', 'uses' =>'AdvertisementController@block']);
Route::post('/advertisements/search', ['as' => 'advertisements.search', 'uses' => 'AdvertisementController@search']);

/*sites only accessed by admin*/
Route::get('blocked/advertisements', ['as' => 'advertisements.blocked', 'uses'=>'AdvertisementController@blockedAdvertisements']);
Route::get('blocked/users', ['as' => 'users.blocked', 'uses'=>'UserController@blockedUsers']);
Route::get('users', ['as' => 'users.list', 'uses'=>'UserController@index']);
Route::post('users/{id}', ['as' => 'users.setAdmin', 'uses'=>'UserController@setAdmin']);

Route::post('tags/{id}', ['as' => 'tags.block', 'uses'=>'TagController@block']);

/*authentication sites*/
Route::auth();

Route::get('dashboard', 'DashboardController@index');