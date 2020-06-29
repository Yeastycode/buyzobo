<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/order', 'OrderController@index');
Route::get('/checkout', 'OrderController@checkout');
Route::get('/buy', 'ShopController@index');
Route::get('/buy/product/{id}/preview', 'ShopController@productPreview');
Route::get('/cart', 'OrderController@cart');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
