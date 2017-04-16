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
Route::get('/', 'FrontEnd\HomeController@index');

Route::get('cart/{id}', 'FrontEnd\CartController@addToCart')->name('add.cart');
Route::get('cart', 'FrontEnd\CartController@showCart')->name('cart');
Auth::routes();

Route::prefix('admin')->group(
    function () {
        Route::get('/login', 'Auth\LoginAdminController@showAdminLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\LoginAdminController@adminLogin')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');

        Route::get('/brands', 'BrandController@adminIndex')->name('admin.brands');
        Route::get('/brands/create', 'BrandController@create')->name('create.brand');
        Route::post('/brands/create', 'BrandController@addBrand')->name('create.brand.submit');


    });

Auth::routes();

Route::get('home', 'FrontEnd\HomeController@index');