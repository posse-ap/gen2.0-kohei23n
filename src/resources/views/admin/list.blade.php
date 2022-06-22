<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
        <style>
          div {text-align: center}
          a {text-align: center}
        </style>
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        <form action="">
          <button type="submit" name="sort" value="1">昇順</button>
          <button type="submit" name="sort" value="">降順</button>
        </form>
        @foreach ($big_questions as $big_question)
        <a href="/admin/small_questions/{{ $big_question->id }}">{{ $big_question->name }}</a>
        {{-- <div>
          @foreach ($questions->where('big_question_id', $big_question->id) as $question)
          <img src="/images/{{ $question->image }}" alt="">
          @endforeach
        </div> --}}
        <div>
          <a href="/admin/big_questions/edit/{{ $big_question->id }}">タイトル名を編集</a><br>
          <a href="/admin/big_questions/delete/{{ $big_question->id }}">大問を削除</a>
        </div>
        
        <p>----------</p>
        @endforeach
        <div>
          <a href="/admin/big_questions/add">＋新しいタイトルを追加</a>
        </div>
      @endsection 


    </body>
</html>
