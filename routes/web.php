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
Route::get('/order', 'OrderController@index')->name('order');
Route::get('/checkout', 'OrderController@checkout')->name('checkout');
Route::get('/buy', 'ShopController@index')->name('buy');
Route::get('/contact-us', 'ShopController@index')->name('contact-us');
Route::get('/buy/product/{id}/preview', 'ShopController@productPreview');
Route::get('/cart', 'OrderController@cart');
Route::get('/sign-out', 'ShopController@signOut')->name('sign-out');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
