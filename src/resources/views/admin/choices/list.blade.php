<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
        <style>
          div {text-align: center}
          a {text-align: center}
          li {margin: 0 auto !important}
        </style>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        <ul class="ul">
          @foreach ($choices as $choice)
          <li class="q">{{$choice->name}}</li>
          <div>
            <a href="/admin/choices/edit/{{ $choice->id }}">選択肢名を編集</a><br>
            <a href="/admin/choices/delete/{{ $choice->id }}">選択肢を削除</a>
          </div>
          @endforeach
        </ul>
        <div>
          <a href="/admin/choices/{{ $question->id }}/add">＋新しい選択肢を追加</a>
          <a href="/admin/small_questions/{{ $question->big_question_id }}">設問の一覧に戻る</a>
        </div>
      @endsection 


    </body>
</html>
