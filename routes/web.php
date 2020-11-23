<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','User\HomeController@menu')->name('menu');
Route::get('/','User\HomeController@services')->name('services');
Route::get('/','User\HomeController@events')->name('events');
Route::get('/','User\HomeController@contactUs')->name('contact-us');
Route::resource('booking','User\BookingsController');





//API Resource Functions

