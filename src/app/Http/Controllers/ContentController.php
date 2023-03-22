<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Content;

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
        $user = User::find($id);
        return view('admin.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = $request->input('role_id');
        $user->save();
        return redirect('/admin/manageusers');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin/manageusers');
    }
}
