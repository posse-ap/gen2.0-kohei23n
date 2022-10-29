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
Route::get('quiz/{id}', 'QuizController@index_questions')->name('questions');

Route::get('test', 'AdminController@test');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/big_questions', 'BigQuestionsController@list');
Route::get('/admin/big_questions', 'BigQuestionsController@list')
      ->middleware('auth');


Route::get('/admin/big_questions/add', 'BigQuestionsController@add_title');
Route::post('/admin/big_questions/add', 'BigQuestionsController@create_title');

Route::get('/admin/big_questions/delete/{id}', 'BigQuestionsController@delete_title');
Route::post('/admin/big_questions/delete/{id}', 'BigQuestionsController@remove_title');

Route::get('/admin/big_questions/edit/{id}', 'BigQuestionsController@edit_title');
Route::post('/admin/big_questions/edit/{id}', 'BigQuestionsController@update_title');

// 設問関連
Route::post('/admin/small_questions/{id}', 'QuestionsController@manage_questions');
Route::get('/admin/small_questions/{id}', 'QuestionsController@manage_questions');

Route::get('/admin/small_questions/{id}/add', 'QuestionsController@add_question');
Route::post('/admin/small_questions/{id}/add', 'QuestionsController@create_question');

Route::get('/admin/small_questions/edit/{id}', 'QuestionsController@edit_question');
Route::post('/admin/small_questions/edit/{id}', 'QuestionsController@update_question');

Route::get('/admin/small_questions/delete/{id}', 'QuestionsController@delete_question');
Route::post('/admin/small_questions/delete/{id}', 'QuestionsController@remove_question');


// 選択肢関連

Route::get('/admin/choices/{id}', 'ChoicesController@manage_choices');

Route::get('/admin/choices/{id}/add', 'ChoicesController@add_choice');
Route::post('/admin/choices/{id}/add', 'ChoicesController@create_choice');

Route::get('/admin/choices/delete/{id}', 'ChoicesController@delete_choice');
Route::post('/admin/choices/delete/{id}', 'ChoicesController@remove_choice');

Route::get('/admin/choices/edit/{id}', 'ChoicesController@edit_choice');
Route::post('/admin/choices/edit/{id}', 'ChoicesController@update_choice');


