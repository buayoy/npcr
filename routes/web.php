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

//controller set redirect to route usermanage
Route::get('/', 'HomeController@index');

//redirect to route usermanage
Route::resource('users', 'UserController');
Route::resource('activity', 'ActivityController');
