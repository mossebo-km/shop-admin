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
    Route::post('data', 'Api\DataController@get');
    Route::get('data', 'Api\DataController@get');
    Route::get('data/relevantKey', 'Api\DataController@relevantKey');
    Route::get('cache', 'Api\DataController@cache');

    Route::group(['prefix' => 'shop'], function () {
        Route::get('products', 'Api\ProductController@index');
        Route::post('products', 'Api\ProductController@store');
        Route::get('products/slug', 'Api\ProductController@slugAvailable');

        Route::get('products/{product}', 'Api\ProductController@show');
        Route::get('products/{product}/status', 'Api\ProductController@status');
        Route::get('products/{product}/slug', 'Api\ProductController@entitySlugAvailable');
        Route::post('products/{product}/image', 'Api\ProductController@imageUpload');
        Route::put('products/{product}', 'Api\ProductController@update');
        Route::delete('products/{product}', 'Api\ProductController@delete');


        Route::post('categories/sort', 'Api\CategoryController@positions');
        Route::get('categories/slug', 'Api\CategoryController@slugAvailable');

        Route::get('categories', 'Api\CategoryController@index');
        Route::get('categories/{category}', 'Api\CategoryController@show');
        Route::get('categories/{category}/status', 'Api\CategoryController@status');
        Route::get('categories/{category}/slug', 'Api\CategoryController@entitySlugAvailable');
        Route::post('categories', 'Api\CategoryController@store');
        Route::put('categories/{category}', 'Api\CategoryController@update');
        Route::delete('categories/{category}', 'Api\CategoryController@delete');


        Route::get('suppliers', 'Api\SupplierController@index');
        Route::get('suppliers/{supplier}', 'Api\SupplierController@show');
        Route::get('suppliers/{supplier}/status', 'Api\SupplierController@status');
        Route::post('suppliers', 'Api\SupplierController@store');
        Route::put('suppliers/{supplier}', 'Api\SupplierController@update');
        Route::delete('suppliers/{supplier}', 'Api\SupplierController@delete');


        Route::post('attributes/sort', 'Api\AttributeController@positions');

        Route::get('attributes', 'Api\AttributeController@index');
        Route::get('attributes/{attribute}', 'Api\AttributeController@show');
        Route::get('attributes/{attribute}/status', 'Api\AttributeController@status');
        Route::post('attributes', 'Api\AttributeController@store');
        Route::put('attributes/{attribute}', 'Api\AttributeController@update');
        Route::delete('attributes/{attribute}', 'Api\AttributeController@delete');
    });
});


Route::get('products/all', function() {
    header('Access-Control-Allow-Origin: *');
    $products = \App\Models\Product::withTranslate()
        ->where('enabled', 1)
        ->with(['prices', 'media'])
        ->orderBy('id', 'desc')
        ->get();

    return \App\Http\Resources\ProductsOuter::collection($products);
});


