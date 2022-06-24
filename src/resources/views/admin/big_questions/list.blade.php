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
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
          $(function() {
              $(".sortable").sortable();
              $(".sortable").disableSelection();
              $("#submit").click(function() {
                var listIds = $(".sortable").sortable("toArray");
                console.log(listIds);
                $("#list-ids").val(listIds);
                // $("form").submit();
              });
          });
        </script>
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
      <form action="" method="post">
      @csrf
      <div class="list">
        <div class="list_labels">
          <div class="list_labels--left">クイズ名</div>
          <div class="list_labels--right">操作</div>
        </div>
        <div class="sortable">
        @foreach ($big_questions as $big_question)
        <div class="list_content" id="{{ $big_question->id }}">
          <div class="list_quiz">
            <a href="/admin/small_questions/{{ $big_question->id }}">{{ $big_question->name }}</a>
          </div>
          <div class="list_actions">
            <a href="/admin/big_questions/edit/{{ $big_question->id }}">タイトル名を編集</a>
            <a href="/admin/big_questions/delete/{{ $big_question->id }}">大問を削除</a>
          </div>
        </div>
        @endforeach
        </div>
        <input type="hidden" id="list-ids" name="list-ids"/>
      </div>
      <button id="submit">更新</button>

        
        <div>
          <a href="/admin/big_questions/add">＋新しいタイトルを追加</a>
        </div>


      </form>
      @endsection 




    </body>
</html>
