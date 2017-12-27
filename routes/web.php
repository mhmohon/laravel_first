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

Route::get('/', 'HomeController@index');

Route::get('/register', 'HomeController@register');

Route::get('/single_product','HomeController@s_product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashbord', 'BackendController@index');

Route::get('/dashbord/category', 'CategoryController@index');

Route::get('/dashbord/category/create', 'CategoryController@create');

Route::post('/dashbord/category','CategoryController@store');
