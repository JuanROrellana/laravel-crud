<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get(
    'client/list', 'ClientController@list'
);

Route::get(
    'client/show', 'ClientController@show'
);

Route::post(
    'client/store', 'ClientController@store'
);

Route::put(
    'client/update', 'ClientController@update'
);

Route::delete(
    'client/delete', 'ClientController@delete'
);
