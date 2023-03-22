<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('admin.languages.managelanguages', compact('languages'));
    }
    public function create()
    {
        return view('admin.languages.addlanguage');
    }

    public function add(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => '名前',
        ]);

        // レコード追加
        $new_language = new Language;
        $new_language->name = $request->input('name');
        $new_language->colour = $request->input('colour');
        $new_language->save();
        return redirect('/admin/managelanguages');
    }

    public function edit($id)
    {
        $language = Language::find($id);
        return view('admin.languages.editlanguage', compact('language'));
    }

    public function update(Request $request, $id)
    {
        $language = Language::find($id);
        $language->name = $request->input('name');
        $language->colour = $request->input('colour');
        $language->save();
        return redirect('/admin/managelanguage');
    }

    public function delete($id)
    {
        $language = Language::find($id);
        $language->display = 0;
        $language->save();
        return redirect('/admin/managelanguage');
    }
}
