<?php

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

Route::post('/submit-form', ['as' => 'submit.form', 'uses' => 'IndexController@submitForm']);

Route::group(['prefix' => '{locale?}', 'middleware' => 'Locale', 'as' => 'prefix.'], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
});
