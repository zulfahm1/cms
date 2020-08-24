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

Route::get('/','FrontController@index');

Route::get('/admin/front', 'FrontController@index')->name('index');

Route::get('/admin/login', 'AuthController@login')->name('login');
Route::post('/admin/login', 'AuthController@loginProcess')->name('login');
Route::get('/admin/register', 'AuthController@register')->name('register');
Route::post('/admin/register', 'AuthController@registrationProcess')->name('register');
Route::post('/admin/logout', 'AuthController@logout')->name('logout');

Route::prefix('/admin')->group(function () {
	Route::get('/','DashboardController@index'); 
	
	Route::get('category', 'CategoryController@index');
	Route::get('/category/create', 'CategoryController@create');
	Route::post('/category/create', 'CategoryController@store');
	Route::get('/category/{id}/edit', 'CategoryController@edit');
	Route::post('/category/{id}/update', 'CategoryController@update');
	Route::get('/category/{id}/delete', 'CategoryController@delete');

	Route::get('artikel', 'ArtikelController@index');
	Route::get('/artikel/create', 'ArtikelController@create');
	Route::post('/artikel/create', 'ArtikelController@store');
	Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
	Route::post('/artikel/{id}/update', 'ArtikelController@update');
	Route::get('/artikel/{id}/delete', 'ArtikelController@delete');

	Route::get('user', 'UserController@index');
	Route::get('/user/create', 'UserController@create');
	Route::post('/user/create', 'UserController@store');
	Route::get('/user/{id}/edit', 'UserController@edit');
	Route::post('/user/{id}/update', 'UserController@update');
	Route::get('/user/{id}/delete', 'UserController@delete');
});

// Route::prefix('/admin')->namespace('Admin')->group(function(){
// 	Route::get('/login', 'AuthController@login')->name('login');
// 	Route::post('/login-proceces', 'AuthController@loginProcces')->name('loginprocces');
// 	Route::get('/register', 'AuthController@register')->name('register');
// 	Route::post('/register-procces', 'AuthController@registerProcces')->name('registerprocces');
// 	Route::post('/logout', 'AuthController@logout')->name('logout');
// });


