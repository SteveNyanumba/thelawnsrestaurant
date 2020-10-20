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
Route::group(['namespace' => 'user'], function () {
    Route::get('/','HomeController@index')->name('home');
    // Route::get('{path}', 'HomeController@index')->where('path','([A-z-\d\/_.]+)?');
});


Route::redirect('/admin', '/admin/dashboard', 301);
Route::redirect('/home', '/admin/dashboard', 301);


Route::group(['prefix' => 'admin','middleware' => ['auth', 'admin'], 'namespace'=>'admin'], function () {

    Route::get('{path}', 'DashboardController@index')->where('path','([A-z-\d\/_.]+)?');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

});





//API Resource Functions

