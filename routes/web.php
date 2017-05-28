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

Route::get('user/list', 'UserController@list');
Route::resource('user', 'UserController');
Route::get('/', 'UserController@index');
Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::resource('log', 'LoginController');
Route::get('logout', 'LoginController@logout');
Route::get('accesos', 'AccesoController@index');
Route::get('accesos/correctos', 'AccesoController@correctos');
Route::get('accesos/incorrectos', 'AccesoController@incorrectos');