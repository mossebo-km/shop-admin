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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['web', 'admin']], function() {
    Route::get('/{any}', function () {
        return view('master');
    })->where('any', '.*');
});

// Route::get('/{any}', function () {
//     return redirect('/login');
// })->where('any', '.*');