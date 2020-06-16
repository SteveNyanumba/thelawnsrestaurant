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
Route::get('/','WebController@homepage')->name('home');
Route::get('/about', 'WebController@about')->name('about');
Route::get('/order','WebController@cart')->name('cart');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::get('/events', 'WebController@events')->name('events');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/menu', 'WebController@menu')->name('menu');


Route::redirect('/admin', '/admin/dashboard', 301);

Route::group(['prefix' => 'admin','middleware'=>'auth:api', 'namespace'=>'admin'], function () {

    Route::get('{path}', 'DashboardController@index')->where('path','([A-z-\d\/_.]+)?');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

});

Route::group(['middleware' => 'auth'], function () {
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

