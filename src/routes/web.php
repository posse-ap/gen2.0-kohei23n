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
Route::get('/admin/big_questions', 'AdminController@list')
      ->middleware('auth');

Route::get('/admin/big_questions/add', 'AdminController@add_title');
Route::post('/admin/big_questions/add', 'AdminController@create_title');

Route::get('/admin/big_questions/delete/{id}', 'AdminController@delete_title');
Route::post('/admin/big_questions/delete/{id}', 'AdminController@remove_title');

Route::get('/admin/big_questions/edit/{id}', 'AdminController@edit_title');
Route::post('/admin/big_questions/edit/{id}', 'AdminController@update_title');

// 設問関連

Route::get('/admin/small_questions/{id}', 'AdminController@manage_questions');

Route::get('/admin/small_questions/{id}/add', 'AdminController@add_question');
Route::post('/admin/small_questions/{id}/add', 'AdminController@create_question');

Route::get('/admin/small_questions/delete/{id}', 'AdminController@delete_question');
Route::post('/admin/small_questions/delete/{id}', 'AdminController@remove_question');


// 選択肢関連

Route::get('/admin/choices/{id}', 'AdminController@manage_choices');

Route::get('/admin/choices/{id}/add', 'AdminController@add_choice');
Route::post('/admin/choices/{id}/add', 'AdminController@create_choice');

Route::get('/admin/choices/delete/{id}', 'AdminController@delete_choice');
Route::post('/admin/choices/delete/{id}', 'AdminController@remove_choice');

Route::get('/admin/choices/edit/{id}', 'AdminController@edit_choice');
Route::post('/admin/choices/edit/{id}', 'AdminController@update_choice');


