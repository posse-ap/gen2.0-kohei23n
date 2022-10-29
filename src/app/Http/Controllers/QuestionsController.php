<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BigQuestion;
use App\Question;
use App\Choice;


class QuestionsController extends Controller
{
    // 設問関連
    public function manage_questions(Request $request, $id)
    {
        $big_question = BigQuestion::find($id);

        if (!empty($request->input('list-ids')))
        {
            $list = $request->input('list-ids');
            $lists = explode(',', $list);

            foreach($lists as $index => $sort_id){
                $question = Question::where('id', $sort_id)->first();
                $question->sort = $index + 1;
                $question->save();
            }
        } else { }

        $questions = Question::where('big_question_id', $id)->where('hide', 0)->orderBy('sort', 'asc')->get();

        return view('admin.small_questions.list', ['big_question' => $big_question, 'questions' => $questions]);
    }

    // 大問関連の処理
    public function add_question(Request $request)
    {
        return view('admin.small_questions.add');
    }

    public function create_question(Request $request, $id)
    {
        $big_question = BigQuestion::find($id);
        $question = new Question;
        $question->big_question_id = $id;

        if ($file = $request->image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('images/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $question->image = $fileName;
        $question->hide = 0;
        $question->sort = Question::max('id') + 1;
        $question->save();
        return redirect('/admin/small_questions/'.$big_question->id);
    }

    public function edit_question($id)
    {
        $question = Question::find($id);
        return view('admin.small_questions.edit', ['question' => $question]);
    }

    public function update_question(Request $request, $id)
    {
        $question = Question::find($id);

        if ($file = $request->image) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('images/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $question->image = $fileName;
        $question->hide = 0;
        $question->sort = Question::max('id') + 1;
        $question->save();
        return redirect('/admin/small_questions/'.$question->big_question_id);
    }

    public function delete_question($id)
    {
        $question = Question::find($id);
        return view('admin.small_questions.delete', ['question' => $question]);
    }

    public function remove_question($id)
    {
        $question = Question::find($id);
        $question->hide = 1;
        $question->save();
        return redirect('/admin/small_questions/'.$question->big_question_id);
    }
}
