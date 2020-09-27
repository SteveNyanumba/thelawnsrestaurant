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
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/events', 'HomeController@events')->name('events');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/menu', 'HomeController@menu')->name('menu');
});


Route::redirect('/admin', '/admin/dashboard', 301);
Route::redirect('/home', '/admin/dashboard', 301);

Route::group(['prefix' => 'admin','middleware' => ['auth', 'admin'], 'namespace'=>'admin'], function () {

    Route::get('{path}', 'DashboardController@index')->where('path','([A-z-\d\/_.]+)?');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

});



Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::post('/logo', 'PhotosController@logoStore');
    Route::post('/bg1', 'PhotosController@backgroundOne');
    Route::post('/bg2', 'PhotosController@backgroundTwo');
    Route::post('/bg3', 'PhotosController@backgroundThree');
    Route::post('/bg4', 'PhotosController@backgroundFour');
    Route::post('/slider1', 'PhotosController@sliderOne');
    Route::post('/slider2', 'PhotosController@sliderTwo');
    Route::post('/slider3', 'PhotosController@sliderThree');
    Route::post('/testimonialbg', 'PhotosController@testimonial');
});

//API Resource Functions

Route::group(['middleware' => ['auth', 'admin'], 'prefix'=>'api'], function () {
    Route::apiResource('menu', 'MenusController'); // For the Menu
    Route::apiResource('categories', 'CategoriesController'); // For the Food Categories
    Route::resource('orders', 'OrdersController'); // For the Orders
});
