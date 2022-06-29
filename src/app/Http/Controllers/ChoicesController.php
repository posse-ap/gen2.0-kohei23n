<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;
use App\Question;
use App\Choice;

class ChoicesController extends Controller
{
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
