<!DOCTYPE html>
<html>
    <head>
        <title>quiz</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
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
                // $("#list-ids").val(1);
                // $("form").submit();
              });
          });
        </script>
        <style>
          div {text-align: center}
          a {text-align: center}
        </style>
        <style>

        </style>
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
        @foreach ($questions as $question)
        <div class="list_content" id="{{ $question->id }}">
          <div class="list_quiz--big">
            <h1>問題：{{$loop->iteration}}</h1>
            <img src="/images/{{$question->image}}" alt="">
          </div>
          <div class="list_actions--big">
            <a href="/admin/choices/{{ $question->id }}">設問の選択肢を編集</a>
            <a href="/admin/small_questions/delete/{{ $question->id }}">設問を削除</a>
          </div>
        </div>
        @endforeach
        </div>
        <input type="hidden" id="list-ids" name="list-ids"/>
      
      </div>
      <button id="submit">更新</button>
      <br>
      <a href="/admin/small_questions/{{ $big_question->id }}/add">＋設問を追加</a>
      <br>
      <a href="/admin/big_questions">大問の一覧に戻る</a>

    </form>
    @endsection


    </body>
</html>
