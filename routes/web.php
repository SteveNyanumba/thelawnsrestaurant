<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

/* The Routes for the Client Side */


Route::redirect('/admin', '/admin/dashboard', 301);
Route::redirect('/home', '/admin/dashboard', 301);


Route::group(['prefix' => 'admin','middleware' => ['auth', 'admin'], 'namespace'=>'admin'], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('{path}', 'DashboardController@index')->where('path','([A-z-\d\/_.]+)?');

});
Route::get('/','User\HomeController@index')->name('home');
Route::get('/menu','User\HomeController@menu')->name('menu');
Route::get('/services','User\HomeController@services')->name('services');
Route::get('/events','User\HomeController@events')->name('events');
Route::get('/contact-us','User\HomeController@contactUs')->name('contact-us');
Route::resource('booking','User\BookingsController');





//API Resource Functions
Route::group(['prefix'=>'api', 'middleware'=>['auth','admin']], function () {
    Route::apiResource('menu', 'API\v1\User\MenusController'); // For the Menu
    Route::apiResource('menu-categories', 'API\v1\User\MenuCategoriesController'); // For the Menu Categories
    Route::apiResource('categories', 'CategoriesController'); // For the Food Categories
});


