<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Product Routes
|--------------------------------------------------------------------------
| All the endpoints for manage products.
|
*/

Route::get('/', 'ProductController@getAll');

Route::post('/', 'ProductController@saveProduct');

Route::put('/{id}', 'ProductController@editProduct');

Route::delete('/{id}', 'ProductController@deleteProduct');

Route::get('/{id}', 'ProductController@getProduct');
