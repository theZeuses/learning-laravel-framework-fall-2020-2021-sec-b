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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');


Route::group(['middleware'=>['sess']], function(){
	Route::group(['middleware'=>['admin']], function(){
		Route::get('/admin', 'adminController@home')->name('admin.home');
		Route::get('/admin/employer/add', 'adminController@addEmployer')->name('employer.add');
		Route::post('/admin/employer/add', 'adminController@storeEmployer');
		Route::get('/admin/employer/list', 'adminController@listEmployer')->name('employer.list');
		Route::get('/admin/employer/edit/{id}', 'adminController@editEmployer')->name('employer.edit');
		Route::post('/admin/employer/edit/{id}', 'adminController@updateEmployer');
		Route::get('/admin/employer/delete/{id}', 'adminController@deleteEmployer')->name('employer.delete');
		Route::post('/admin/employer/delete/{id}', 'adminController@removeEmployer');
	});
	Route::group(['middleware'=>['employer']], function(){
		Route::get('/employer', 'employerController@home')->name('employer.home');
	});
});