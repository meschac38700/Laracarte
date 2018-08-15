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

Route::name("laracarte.home")->get('/', 'LaracarteController@home');
Route::name('laracarte.about')->get('/about', "LaracarteController@about");
Route::name('laracarte.artisans')->get('/artisans', "LaracarteController@artisans");
Route::name('laracarte.contact')->get('/contact', "MessageController@create");
Route::name('laracarte.contact')->post('/contact', "MessageController@store");