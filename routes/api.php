<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::get('products/{product}/status', 'ProductController@status');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');



Route::post('categories/sort', 'CategoryController@changePositions');
Route::get('categories/slug', 'CategoryController@slugExist');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{category}', 'CategoryController@show');
Route::get('categories/{category}/status', 'CategoryController@status');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@delete');




Route::post('data', 'DataController@get');
Route::get('data', 'DataController@get');
Route::get('data/relevantKey', 'DataController@relevantKey');