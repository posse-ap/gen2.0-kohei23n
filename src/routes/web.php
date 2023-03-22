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

// 管理者
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
      Route::get('/home', 'AdminController@index')->name('admin');
      // ユーザー追加
      Route::get('/adduser', 'AdminController@create');
      Route::post('/adduser', 'AdminController@add');
      // ユーザー編集
      Route::get('/edituser/{id}', 'AdminController@edit');
      Route::post('/edituser/{id}', 'AdminController@update');
      Route::get('/deleteuser/{id}', 'AdminController@delete');
});


// ユーザー
Route::get('/top', 'AppController@index')
      ->middleware('auth');
Route::post('/top', 'AppController@create')->name('add_record');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
