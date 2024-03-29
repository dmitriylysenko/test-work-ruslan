<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'strings', 'namespace' => 'Api'], function () {
  Route::get('/generate', 'StringController@generate');
  Route::get('/{id}', 'StringController@retrieve');
  Route::get('/', 'StringController@list');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
