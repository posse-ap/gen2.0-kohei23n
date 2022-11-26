<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
=======

//20:04 竜大 ここでルーティングつくって、コントローラーはviewじゃなくてjsonとか値をreturnするような設計にすると、
// 20:04 竜大 ただデータを渡すだけのルーティングができるわけよ
>>>>>>> 83d4ba49c7e907fb23706b37793d00372a8a3725
