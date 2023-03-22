<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Content;
use App\Record;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('admin.managecontent', compact('contents'));
    }
    public function create()
    {
        return view('admin.addcontent');
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
        $new_content = new Content;
        $new_content->name = $request->input('name');
        $new_content->colour = $request->input('colour');
        $new_content->save();
        return redirect('/admin/managecontent');
    }

    public function edit($id)
    {
        $content = Content::find($id);
        return view('admin.editcontent', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::find($id);
        $content->name = $request->input('name');
        $content->colour = $request->input('colour');
        $content->save();
        return redirect('/admin/managecontent');
    }

    public function delete($id)
    {
        $content = Content::find($id);
        $content->display = 0;
        $content->save();
        return redirect('/admin/managecontent');
    }
}
