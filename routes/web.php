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
Route::get('admin/login', 'AdminController@login');
Route::post('admin/loginresult', 'AdminController@loginresult');
Route::get('admin/logout', 'AdminController@logout');


Route::get('admin/dashboard', 'AdminController@dashboard');
Route::get('admin/jobs', 'AdminController@jobs');
Route::post('admin/jobsresult', 'AdminController@jobsresult');

Route::get('admin/blog', 'AdminController@blog');


Route::get('/login', 'LoginController@login');
Route::post('/loginresult', 'LoginController@loginresult');

Route::get('/user', 'LoginController@user');

Route::get('/register', 'LoginController@register');
Route::post('/registerresult', 'LoginController@registerresult');



Route::get('/home', 'LoginController@home');
	