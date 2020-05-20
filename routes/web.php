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


Route::resource('receipe', 'ReceipeController');

// Route::get('/', 'ReceipeController@index');
// Route::get('receipe', 'ReceipeController@index');
// Route::get('receipe/create', 'ReceipeController@createReceipe');
// Route::post('receipe', 'ReceipeController@create');



Auth::routes();

// Route::get('/home', 'HomeController@index');
