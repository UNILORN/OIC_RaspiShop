<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'TopController@index');

Route::get('/product', 'ProductController@index');

Route::resource('/cart', 'CartController');
Route::get('/cart/{id}/delete', 'CartController@destroy');

Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');
Route::get('/buy/success', 'BuyController@success');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/check','AdminController@check');
Route::post('/admin','AdminController@store');
Route::get('/admin/logout','AdminController@logout');

Route::get('/mypage', 'MypageController@index');


Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/session', function () {
    session()->flush();
});
