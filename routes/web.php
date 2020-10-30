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
//User routes
Route::get('/', 'HomeController@index')->name('home');
Route::get("/home", "UserHomeController@index")->name('home');
Route::get("/product/", "UserProductController@index")->name('product');
Route::get("/product/{id}", "UserProductController@show");
Route::get("/order/", "UserOrderController@index")->name('order');
Route::get("/order/{id}", "UserOrderController@show");


//admin routes
Route::get("/admin", "AdminHomeController@index")->name('home');
Route::get("/admin/product/", "AdminProductController@index")->name('product');
Route::get("/admin/product/{id}", "AdminProductController@show");
Route::get("/admin/order/", "AdminOrderController@index")->name('order');
Route::get("/admin/order/{id}", "AdminOrderController@show");
Route::get("/admin/User", "AdminOrderController@index");
Route::get("/admin/User/{id}", "AdminOrderController@show");
