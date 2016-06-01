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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
    ]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::resource('advertisements','AdvertisementController');



Route::get('profile', [
    'middleware' => 'auth', 
    'uses' => 'PagesController@profile'
    ]);


Route::get('dashboard', [
    'middleware' => 'admin', 
    'uses' => 'DashboardController@index'   
    ]);


Route::get('/', 'PagesController@index');





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
Route::get('dashboard/users', 'UserController@index');

Route::get('dashboard/users/create', [
    'as' => 'users.create',
    'uses' => 'UserController@getCreate',
]);
Route::post('dashboard/users/create', 'UserController@postCreate');
Route::get('dashboard/users/edit/{id}', ['as' => 'users.edit',
    'uses' => 'UserController@getEdit', ]);

Route::post('dashboard/users/edit/{id}', 'UserController@postEdit');
Route::get('dashboard/users/show/{id}', 'UserController@show');
Route::post('dashboard/users/delete/{id}', [
    'as' => 'users.delete',
    'uses' => 'UserController@postDelete',
]);