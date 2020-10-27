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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/my/", "FrontHomeController@index")->name('home');
Route::get("/products/", "FrontProductController@index")->name('products');
Route::get("/products/{id}", "FrontProductController@show");
Route::get("/orders/", "FrontOrderController@index")->name('orders');
Route::get("/orders/{id}", "FrontOrderController@show");
