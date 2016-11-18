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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index');

Route::get('/mypackages','PackageController@mypackages');

Route::get('/profile_register','ProfileController@index');

Route::get('/myprofile','ProfileController@MyProfile');

Route::get('/newpackage','PackageController@index');

Route::get('/searchByShop','PackageController@showShopTracking');

Route::post('/add_package','PackageController@store');

Route::get('/add_profile','ProfileController@store');

Route::get('/example',function(){return view('example');});
