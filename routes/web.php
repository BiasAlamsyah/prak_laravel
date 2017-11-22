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

Route::get('about', function () {
    return view('about');
});
Route::get('forum', function(){
	return view('forum');
});
Route::get('list',['as'=>'list','uses'=>'UploadController2@index2']);
Route::get('/',['as'=>'welcome','uses'=>'UploadController3@index2']);

Route::get('upload',['as'=>'upload.index','uses'=>'UploadController@index']);
Route::get('upload/create',['as'=>'upload.create','uses'=>'UploadController@create']);
Route::post('upload',['as'=>'upload.store','uses'=>'UploadController@store']);

Route::get('review',['as'=>'review.index','uses'=>'ReviewController2@index']);
Route::get('review',['as'=>'review.index','uses'=>'ReviewController@index']);
Route::get('review/create',['as'=>'review.create','uses'=>'ReviewController@create']);
Route::post('review',['as'=>'review.store','uses'=>'ReviewController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::resource('manageadmins', 'ManageAdminController');

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
