@extends('layouts.app')

@section('content')
    <div class="admin_container">
        <h2>ユーザー管理</h2>
        <form action="" method="POST">
            @csrf
            <table>
                <tr>
                    <th>ユーザー名</th>
                    <th>メール</th>
                    <th>ロール</th>
                    <th>操作</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_id }}</td>
                        <td>
                            <a href="/admin/edituser/{{ $user->id }}" class="btn btn-primary">編集</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="/admin/adduser" class="btn btn-success">ユーザー追加</a>
        </form>
    </div>
@endsection
