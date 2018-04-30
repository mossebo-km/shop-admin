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
    header('Access-Control-Allow-Origin: *');
    $products = \App\Models\Product::withTranslate()
        ->where('enabled', 1)
        ->with(['prices', 'media'])
        ->orderBy('id', 'desc')
        ->get();

    return \App\Http\Resources\ProductsOuter::collection($products);
});


<<<<<<< Updated upstream
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
        Route::get('attributes/{attribute}/options', 'Api\AttributeController@options');
        Route::post('attributes', 'Api\AttributeController@store');
        Route::put('attributes/{attribute}', 'Api\AttributeController@update');
        Route::delete('attributes/{attribute}', 'Api\AttributeController@delete');
=======
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
>>>>>>> Stashed changes
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