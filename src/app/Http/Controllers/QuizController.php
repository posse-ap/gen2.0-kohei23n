<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use App\Question;


class QuizController extends Controller
{

    // 問題リスト表示用
    public function list() 
    {
        // big_questions テーブルのデータを全て取得し $links に格納
        $bigQuestions = BigQuestion::where('hide', 0)->get();
        // list.blade.php で foreach を回し問題リストを表示させる
        return view('list', compact('bigQuestions'));
    }

    // 問題表示用
    public function index_questions($id) 
    {
        // 問題を表示
        $questions = Question::with('choices')->where('big_question_id', $id)->where('hide', 0)->orderBy('sortID', 'asc')->get();

        return view('quiz', compact('questions'));
    }

}

