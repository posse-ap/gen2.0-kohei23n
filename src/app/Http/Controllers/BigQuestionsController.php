<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;
use App\Question;


class BigQuestionsController extends Controller
{
    // 問題リスト表示用
    public function list(Request $request) 
    {
        $user = Auth::user();
        $questions = Question::all();


        if (!empty($request->input('list-ids')))
        {
            $list = $request->input('list-ids');

            $lists = explode(',', $list);

            foreach($lists as $index => $id){
                $big_question = BigQuestion::where('id', $id)->first();
                $big_question->sort = $index + 1;
                $big_question->save();
            }
        } 

        $big_questions = BigQuestion::where('hide', 0)->orderBy('sort', 'asc')->get();


        return view('admin.big_questions.list', ['big_questions' => $big_questions, 'questions' => $questions, 'user' => $user]);
    }

    public function add_title(Request $request)
    {
        return view('admin.big_questions.add');
    }

    public function create_title(Request $request)
    {
        $big_question = new BigQuestion;
        $big_question->name = $request->input('title');
        $big_question->hide = 0;
        $big_question->sort = BigQuestion::max('id') + 1;
        $big_question->save();
        return redirect('/admin/big_questions');
    }

    public function delete_title($id)
    {
        $big_question = BigQuestion::find($id);
        return view('admin.big_questions.delete', ['big_question' => $big_question]);
    }

    public function remove_title($id)
    {
        $big_question = BigQuestion::find($id);
        $big_question->hide = 1;
        $big_question->save();
        return redirect('/admin/big_questions');
    }

    public function edit_title($id)
    {
        $big_question = BigQuestion::find($id);
        return view('admin.big_questions.edit', ['big_question' => $big_question]);
    }

    public function update_title(Request $request, $id)
    {
        $big_question = BigQuestion::find($id);
        $big_question->name = $request->input('title');
        $big_question->save();
        return redirect('/admin/big_questions');
    }


}
