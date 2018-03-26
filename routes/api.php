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
// Route::get('products/slug', 'ProductController@slugExist');
// Route::post('products/image', 'ProductController@imageUpload');
// Route::get('products/save', 'ProductController@saveImage');


// Route::get('products/{product}/test', 'ProductController@update');

// Route::get('products', 'ProductController@index');
// Route::get('products/{product}', 'ProductController@show');
// Route::get('products/{product}/status', 'ProductController@status');
// Route::post('products', 'ProductController@store');
// Route::put('products/{product}', 'ProductController@update');
// Route::delete('products/{product}', 'ProductController@delete');

Route::group(['middleware' => 'auth:api'], function () {
  Route::post('categories/sort', 'Api\CategoryController@changePositions');
  Route::get('categories/slug', 'Api\CategoryController@slugExist');

  Route::get('categories', 'Api\CategoryController@index');
  Route::get('categories/{category}', 'Api\CategoryController@show');
  Route::get('categories/{category}/status', 'Api\CategoryController@status');
  Route::post('categories', 'Api\CategoryController@store');
  Route::put('categories/{category}', 'Api\CategoryController@update');
  Route::delete('categories/{category}', 'Api\CategoryController@delete');


  Route::post('data', 'Api\DataController@get');
  Route::get('data', 'Api\DataController@get');
  Route::get('data/relevantKey', 'Api\DataController@relevantKey');


  Route::get('products', 'Api\ProductController@index');
  Route::post('products', 'Api\ProductController@store');
  Route::post('products/slug', 'Api\ProductController@slugAvailable');

  Route::get('products/{product}', 'Api\ProductController@show');
  Route::post('products/{product}/status', 'Api\ProductController@status');
  Route::post('products/{product}/slug', 'Api\ProductController@productSlugAvailable');
  Route::post('products/{product}/image', 'Api\ProductController@imageUpload');
  Route::put('products/{product}', 'Api\ProductController@update');
  Route::delete('products/{product}', 'Api\ProductController@delete');
});




