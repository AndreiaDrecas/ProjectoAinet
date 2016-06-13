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



Route::get('profile', [
    'middleware' => 'auth', 
    'uses' => 'PagesController@profile'
    ]);


Route::get('dashboard', [
    'middleware' => 'admin', 
    'uses' => 'DashboardController@index'   
    ]);


Route::get('/', 'PagesController@index');

Route::post('/users/block/{id}', ['as' => 'users.block', 'uses' =>'UserController@block']);
Route::post('/advertisements/block/{id}', ['as' => 'advertisements.block', 'uses' =>'AdvertisementController@block']);





/*Route::get('advertisements', 'AdvertisementController@index');


Route::get('advertisements/create','AdvertisementController@getCreate');
Route::post('advertisements/create', 'AdvertisementController@postCreate');
Route::get('advertisements/edit/{id}', 'AdvertisementController@getEdit');

Route::post('advertisements/edit/{id}', 'AdvertisementController@postEdit');

Route::get('advertisements/{id}', 'AdvertisementController@show');
Route::get('advertisements/create', [
    'as' => 'advertisements.create',
    'uses' => 'AdvertisementController@getCreate',
]);




Route::post('advertisements/delete/{id}', [
    'as' => 'advertisements.delete',
    'uses' => 'AdvertisementController@postDelete',
]);

*/

Route::auth();


Route::get('dashboard', 'DashboardController@index');
