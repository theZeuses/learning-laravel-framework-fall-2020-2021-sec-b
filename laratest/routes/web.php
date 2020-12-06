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

Route::get('/', function(){
	echo "index page";
});


Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');

Route::get('/home', 'homeController@index');
Route::get('/logout', 'logoutController@index');

Route::get('/create', 'homeController@create');
Route::post('/create', 'homeController@insert');

Route::get('/stdlist', 'homeController@stdlist');
Route::get('/details/{id}', 'homeController@details');

Route::get('/edit/{id}', 'homeController@edit');
Route::post('/edit/{id}', 'homeController@update');

Route::get('/delete/{id}', 'homeController@delete');
Route::post('/delete/{id}', 'homeController@destroy');

