<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;


class AdminController extends Controller
{
    // 問題リスト表示用
    public function list(Request $request) 
    {
        $user = Auth::user();
        $links = BigQuestion::all();
        return view('admin.list', ['links' => $links, 'user' => $user]);
    }

    public function bigquestions($id) 
    {
        // 問題を表示
        $bigquestion = BigQuestion::where('id', $id)->get();
        return view('admin.bigquestion', ['bigquestion' => $bigquestion]);
    }
}
