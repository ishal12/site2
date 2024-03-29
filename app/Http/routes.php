<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Login Routes...
Route::get('admin/login','AdminAuth\AuthController@showLoginForm');
Route::post('admin/login','AdminAuth\AuthController@login');
Route::get('admin/logout','AdminAuth\AuthController@logout');

// Registration Routes...
Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\AuthController@register');

Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

Route::get('admin', 'AdminController@index');

Route::resource('admin/user', 'UserController');
Route::resource('admin/post', 'PostController');
Route::resource('admin/kategori', 'KategoriController');
Route::resource('admin/jabatan', 'JabatanController');

