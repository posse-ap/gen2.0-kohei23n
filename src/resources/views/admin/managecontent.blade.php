@extends('layouts.app')

@section('content')
    <div class="admin_container">
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/admin/manageusers">ユーザー管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">コンテンツ管理</a>
                </li>
            </ul>
        </nav>
        <form action="" method="POST">
            @csrf
            <table>
                <tr>
                    <th>コンテンツ名称</th>
                    <th>グラフにおける色</th>
                </tr>
                @foreach ($contents as $content)
                    <tr>
                        <td>{{ $content->name }}</td>
                        <td><div style="height: 20px; width: 150px; background-color: {{ $content->colour }}"></div></td>
                        <td>
                            <a href="/admin/editcontent/{{ $content->id }}" class="btn btn-primary">編集</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <a href="/admin/addcontent" class="btn btn-success">コンテンツ追加</a>
        </form>
    </div>
@endsection
