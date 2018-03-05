<?php

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

// Route::get('/', function () {
//     return view('shop/products/list');
// });

Route::get('/', 'HomeController@index');

Route::get('/home', function () {
    return view('master');
});

Route::get('/boroda', function () {
    return view('master');
});

Auth::routes();

Route::get('products', 'ProductController@index');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
// view('home')