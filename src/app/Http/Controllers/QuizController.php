<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{

    // 問題リスト表示用
    public function index_links(Request $request) {
        // big_questions テーブルのデータを全て取得し $links に格納
        $links = DB::table('bigquestions')->get();
        // list.blade.php で foreach を回し問題リストを表示させる
        return view('list', ['links' => $links]);
    }

    // 問題表示用
    public function index_questions($id) {
        // 問題を表示
        $questions = DB::table('questions')->where('big_question_id', $id)->get();

        // 選択肢の配列をまず作る
        $choices = [];


        // その配列に取得した選択肢の値を入れる
        foreach ($questions as $question) {

            // if文で分岐する場合の書き方
            // $choices = DB::table('choices')->get();

            // 3回 array_push してるから、quiz.blade.php の方の foreach は $choices as $choice じゃダメで、$choices[$loop->index] にしないといけない
            // 1回した array_push を一つのグループとして処理してるイメージかな？ 
            array_push($choices, DB::table('choices')->where('question_id', $question->id)->get());

        }

        


        return view('quiz', ['questions' => $questions, 'choices' => $choices]);
    }

}

