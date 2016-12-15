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
Route::post('/buy','BuyController@store');
Route::get('/buy/success','BuyController@success');


Route::get('/mypage', function () {
    return view('mypage');
});

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
