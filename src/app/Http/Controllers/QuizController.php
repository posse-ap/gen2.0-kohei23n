<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index1() {
        return view('quiz1');
    }

    public function index2() {
        return view('quiz2');
    }

    // public function index($id) {
    //     return view('quiz');
    // }
}

//シングルアクション
// class HelloController extends Controller
// {
// public function __invoke() {

//     return <<<EOF
    
// <html>
// <head>
// <title>Hello</title>        
// <style>
// body {font-size:16pt; color: #999; }
// h1 { font-size: 100pt; text-align:right; color:#eee;
// </style>
// </head>
// <body>
// <h1>Single Action</h1>
// <p>これは、シングルアクションコントローラのアクションです。</p>
// </body>
// </html>
// EOF;
//     }
// }
