<!DOCTYPE html>
<html>
    <head>
        <title>quiz</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        <div class="qDiv">
            @foreach ($questions as $question)
            <h1 class="nameunderline">問題：{{$loop->iteration}}</h1>
            <img src="/images/{{$question->image}}" alt="">
            <div>
              <a href="/admin/choices/{{ $question->id }}">設問の選択肢を編集</a><br>
              <a href="/admin/small_questions/delete/{{ $question->id }}">設問を削除</a>
            </div>
            @endforeach
            <a href="/admin/small_questions/{{ $big_question->id }}/add">＋設問を追加</a>
            <br>
            <a href="/admin/big_questions">大問の一覧に戻る</a>
        </div>
      @endsection
    </body>
    <script src="/js/main.js"></script>
</html>
