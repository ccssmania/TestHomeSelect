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


Auth::routes();

Route::get('/', 'HomeController@index');

//product Routes

Route::get('/products', 'ProductController@index');
Route::get('/products/create','ProductController@create');
Route::post('/product', 'ProductController@store');
Route::get('/product/{id}','HomeController@showProduct');
Route::get('/product/{id}/edit','ProductController@edit');
Route::post('/product/edit/{id}','ProductController@update');
Route::post('/product/delete/{id}', 'ProductController@destroy');
