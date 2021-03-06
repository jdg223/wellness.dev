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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index');

Route::get('/store', 'StoreController@index');
Route::get('/products/{id}', 'StoreController@show');

Route::get('/blog','BlogController@index');

Route::get('login','Auth\AuthController@index');
Route::get('validateLogin','Auth\AuthController@validateLogin');
