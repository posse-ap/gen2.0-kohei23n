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

}

