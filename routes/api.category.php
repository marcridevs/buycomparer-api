<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Category Routes
|--------------------------------------------------------------------------
| All the endpoints for manage categories.
|
*/

Route::get('/', 'CategoryController@getAll');

Route::get('/{id}', 'CategoryController@getCategory');

Route::delete('/{id}', 'CategoryController@deleteCategory');

Route::post('/', 'CategoryController@saveCategory');

Route::put('/{id}', 'CategoryController@editCategory');
