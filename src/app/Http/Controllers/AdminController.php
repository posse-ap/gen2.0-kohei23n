<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;
use App\Question;
use App\Choice;


class AdminController extends Controller
{
    // 問題リスト表示用
    public function list(Request $request) 
    {
        $user = Auth::user();
        // $big_questions = BigQuestion::where('hide', 0)->orderBy('sortID', 'asc')->get();
        $sort = $request->get('sort');
        if ($sort === '1') {
                $big_questions = BigQuestion::where('hide', 0)->orderBy('sortID', 'desc')->get();
        } else {
                $big_questions = BigQuestion::where('hide', 0)->orderBy('sortID', 'asc')->get();
        }

        $questions = Question::all();

        

        return view('admin.list', ['big_questions' => $big_questions, 'questions' => $questions, 'user' => $user]);
    }


    // 大問関連の処理
    public function add_title(Request $request)
    {
        return view('admin.big_questions.add');
    }

    public function create_title(Request $request)
    {
        $big_question = new BigQuestion;
        $big_question->name = $request->input('title');
        $big_question->hide = 0;
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
        return redirect('/admin/big_questions'.$big_question->id);
    }

    // 設問関連
    public function manage_questions($id)
    {
        $big_question = BigQuestion::find($id);
        $questions = Question::where('big_question_id', $id)->where('hide', 0)->get();

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
        $question->save();
        return redirect('/admin/small_questions/'.$big_question->id);
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

    // 選択肢関連

    public function manage_choices($id)
    {
        $question = Question::find($id);
        // 問題を表示
        $choices = Choice::where('question_id', $id)->where('hide', 0)->get();

        return view('admin.choices.list', ['choices' => $choices, 'question' => $question]);
    }

    public function add_choice(Request $request, $id)
    {
        return view('admin.choices.add');
    }

    public function create_choice(Request $request, $id)
    {
        $choice = new Choice;
        $choice->question_id = $id;
        $choice->name = $request->input('choice');
        $choice->valid = 0;
        $choice->hide = 0;
        $choice->save();
        return redirect('/admin/choices/'.$choice->question_id);
    }

    public function delete_choice($id)
    {
        $choice = Choice::find($id);
        return view('admin.choices.delete', ['choice' => $choice]);
    }

    public function remove_choice($id)
    {
        $choice = Choice::find($id);
        $choice->hide = 1;
        $choice->save();
        return redirect('/admin/choices/'.$choice->question_id);
    }

    public function edit_choice($id)
    {
        $choice = Choice::find($id);
        return view('admin.choices.edit', ['choice' => $choice]);
    }

    public function update_choice(Request $request, $id)
    {
        $choice = Choice::find($id);
        $choice->name = $request->input('choice');
        $choice->save();
        return redirect('/admin/choices/'.$choice->question_id);
    }


}
