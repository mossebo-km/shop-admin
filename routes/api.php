<?php

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


            Route::get('permission-groups/all', 'PermissionGroupController@all');
            Route::resource('permission-groups', 'PermissionGroupController');
        });
    });


    Route::get('reviews/{review}/status', 'ReviewController@status');
    Route::post('reviews/{review}/confirmed', 'ReviewController@imageUpload');
    Route::resource('reviews', 'ReviewController');

    // Магазин
    Route::group(['prefix' => 'shop', 'namespace' => 'Shop'], function () {
        Route::get('products/{product}/status', 'ProductController@status');
        Route::get('products/{product}/search', 'ProductController@query');
        Route::post('products/{product}/image', 'ProductController@imageUpload');
        Route::resource('products', 'ProductController');

        Route::post('categories/sort', 'CategoryController@positions');
        Route::get('categories/slug', 'CategoryController@slugAvailable');
        Route::get('categories/{category}/status', 'CategoryController@status');
        Route::get('categories/{category}/slug', 'CategoryController@entitySlugAvailable');
        Route::post('categories/{category}/image', 'CategoryController@imageUpload');
        Route::resource('categories', 'CategoryController');

        Route::post('rooms/sort', 'RoomController@positions');
        Route::get('rooms/slug', 'RoomController@slugAvailable');
        Route::get('rooms/{room}/status', 'RoomController@status');
        Route::get('rooms/{room}/slug', 'RoomController@entitySlugAvailable');
        Route::post('rooms/{room}/image', 'RoomController@imageUpload');
        Route::resource('rooms', 'RoomController');

        Route::post('styles/sort', 'StyleController@positions');
        Route::get('styles/slug', 'StyleController@slugAvailable');
        Route::get('styles/{style}/status', 'StyleController@status');
        Route::get('styles/{style}/slug', 'StyleController@entitySlugAvailable');
        Route::post('styles/{style}/image', 'StyleController@imageUpload');
        Route::resource('styles', 'StyleController');

        Route::get('suppliers/{supplier}/status', 'SupplierController@status');
        Route::resource('suppliers', 'SupplierController');

        Route::post('attributes/sort', 'AttributeController@positions');
        Route::get('attributes/{attribute}/status', 'AttributeController@status');
        Route::get('attributes/{attribute}/options', 'AttributeController@options');
        Route::resource('attributes', 'AttributeController');

        Route::post('price-types/sort', 'PriceTypeController@positions');
        Route::get('price-types/{priceType}/status', 'PriceTypeController@status');
        Route::resource('price-types', 'PriceTypeController');

        Route::get('promo-codes/{promoCode}/status', 'PromoCodeController@status');
        Route::resource('promo-codes', 'PromoCodeController');

        Route::post('badge-types/sort', 'BadgeTypeController@positions');
        Route::resource('badge-types', 'BadgeTypeController');
    });
});