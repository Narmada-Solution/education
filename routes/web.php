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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    //return view('admin.content');
	return view('admin.index2');
	
});

Route::get('admin/dashboard', 'AdminController@dashboard');
Route::get('admin/jobs', 'AdminController@jobs');
Route::get('admin/blog', 'AdminController@blog');


Route::get('/login', 'LoginController@login');
Route::post('/loginresult', 'LoginController@loginresult');

Route::get('/register', 'LoginController@register');

Route::get('/home', 'LoginController@home');
	