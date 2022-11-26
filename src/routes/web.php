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

<<<<<<< HEAD
Route::get('/top', 'AppController@languages');
Route::get('/top', 'AppController@index')
      ->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/top', 'AppController@index');
      // ->middleware('auth');
Route::post('/top', 'AppController@create')->name('add_record');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');


>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
