<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('quiz', 'QuizController@list');
Route::get('quiz/{id}', 'QuizController@index_questions');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/list', 'AdminController@list')
      ->middleware('auth');
