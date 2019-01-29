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

// rutele pentru paginile publice

Route::get('/', 'PublicController@home');
Route::get('/details/{id}', 'PublicController@details');

Route::get('/cart', 'PublicController@cart');
Route::post('/cart', 'PublicController@add');
Route::get('/sterge', 'PublicController@sterge');

Route::get('/order', 'PublicController@orderForm');
Route::post('/order', 'PublicController@order');

// rutele pentru paginile private

Route::get('/login', 'PrivatController@loginForm');
Route::get('/admin', 'PrivatController@verify');
Route::post('/admin', 'PrivatController@loginProcess');
Route::get('/logout', 'PrivatController@logout');

Route::get('/orders', 'PrivatController@orders');
Route::get('/products', 'PrivatController@products');
Route::post('/removeOrder', 'PrivatController@removeOrder');

Route::get('/edit', 'PrivatController@edit');
Route::post('/edit', 'PrivatController@editProcess');

Route::get('/add', 'PrivatController@add');
Route::post('/add', 'PrivatController@addProcess');
Route::get('/remove', 'PrivatController@remove');
