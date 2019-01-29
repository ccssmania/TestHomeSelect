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
Route::get('/product/{id}/edit','ProductController@edit');
Route::post('/product/edit/{id}','ProductController@update');
Route::post('/product/delete/{id}', 'ProductController@destroy');
Route::get('/product/{id}/inventory','InventoryController@showProduct');

//Category Routes

Route::get('/category', 'CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{id}/edit','CategoryController@edit');
Route::post('/category/edit/{id}','CategoryController@update');

//Inventory Routes

Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory/create','InventoryController@create');
Route::post('/inventory', 'InventoryController@store');


Route::get('/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");


	if(!\File::exists($path)) abort(404);
	$file = \File::get($path);
	$type = \File::mimeType($path);

	$response = Response::make($file,200);
	$response->header("Content-Type", $type);

	return $response;
});