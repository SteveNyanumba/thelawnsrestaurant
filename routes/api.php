<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('slider', 'SlidersController');
Route::apiResource('slidercategories', 'SliderCategoryController');


Route::post('/logo', 'PhotosController@logoStore');
Route::post('/bg1', 'PhotosController@backgroundOne');
Route::post('/bg2', 'PhotosController@backgroundTwo');
Route::post('/bg3', 'PhotosController@backgroundThree');
Route::post('/bg4', 'PhotosController@backgroundFour');
Route::post('/testimonialbg', 'PhotosController@testimonial');

