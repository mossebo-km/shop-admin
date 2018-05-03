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

Route::get('products/all', function() {
    $products = \App\Models\Product::withTranslate()
        ->where('enabled', 1)
        ->with(['prices', 'media'])
        ->orderBy('id', 'desc')
        ->get();

    return response()
        ->json(\App\Http\Resources\ProductsOuter::collection($products))
        ->header('Access-Control-Allow-Origin', '*');
});


Route::group(['middleware' => ['auth:api', 'api.auth', 'api.withData'], 'namespace' => 'Api'], function () {
    Route::post('data', 'DataController@get');
    Route::get('data', 'DataController@get');
    Route::get('data/relevantKey', 'DataController@relevantKey');
    Route::get('cache', 'DataController@cache');


    // Система администрирования
    Route::group(['prefix' => 'system'], function () {
        Route::get('admins/{admin}/status', 'AdminController@status');
        Route::post('admins/{admin}/image', 'AdminController@imageUpload');
        Route::resource('admins', 'AdminController');


        // Контроль доступа
        Route::group(['prefix' => 'rbac'], function () {
            Route::resource('roles', 'RoleController');

            Route::resource('permissions', 'PermissionController');
        });
    });


    // Магазин
    Route::group(['prefix' => 'shop'], function () {
        Route::get('products/{product}/status', 'ProductController@status');
        Route::post('products/{product}/image', 'ProductController@imageUpload');
        Route::resource('products', 'ProductController');

        Route::post('categories/sort', 'CategoryController@positions');
        Route::get('categories/slug', 'CategoryController@slugAvailable');
        Route::get('categories/{category}/status', 'CategoryController@status');
        Route::get('categories/{category}/slug', 'CategoryController@entitySlugAvailable');
        Route::resource('categories', 'CategoryController');

        Route::get('suppliers/{supplier}/status', 'SupplierController@status');
        Route::resource('suppliers', 'SupplierController');

        Route::post('attributes/sort', 'AttributeController@positions');
        Route::get('attributes/{attribute}/status', 'AttributeController@status');
        Route::get('attributes/{attribute}/options', 'AttributeController@options');
        Route::resource('attributes', 'AttributeController');

        Route::post('price-types/sort', 'PriceTypeController@positions');
        Route::get('price-types/{priceType}/status', 'PriceTypeController@status');
        Route::resource('price-types', 'PriceTypeController');
    });
});