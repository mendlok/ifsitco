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

Route::get('/mypackages/myalerts','PackageController@myAlerts');

Route::get('/mypackages/holdInMiami','PackageController@holdInMiami');

Route::get('/mypackages/inTransit','PackageController@inTransit');

Route::get('/mypackages/delivered','PackageController@delivered');

Route::get('/mypackages/holdByInvoice','PackageController@holdByInvoice');

Route::get('/searchByShop','PackageController@showShopTracking');

Route::get('/add_package','PackageController@store');

Route::get('/add_profile','ProfileController@store');

Route::get('/mypackages/more-info/{tracking}', ['uses' =>'PackageController@infoPackage']);

Route::get('/example',function(){return view('example');});




Route::get('/allpackages','AdminController@allPackages');

Route::get('/home_admin','AdminController@adminHome');

Route::get('/allpackages/alert','AdminController@allAlerts');

Route::get('/allpackages/delivered','AdminController@allDelivered');

Route::get('/allpackages/inTransit','AdminController@allinTransit');

Route::get('/allpackages/undelivarable','AdminController@allundelivered');


Route::get('/newadmin','AdminController@newadmin');

Route::get('/seealladmins','AdminController@serachprofileadmin');

Route::get('//seealllcients','AdminController@serachprofileclient');

Route::get('/allpackages/more-info/{tracking}', ['uses' =>'AdminController@allinfoPackage']);

Route::post('/saveBill','BillController@update');
