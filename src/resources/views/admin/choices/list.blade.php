@extends('layouts.app')

@section('title', '選択肢一覧')

@section('content')
  <ul class="ul_admin">
  @foreach ($choices as $choice)
    <li class="q_admin">{{ $choice->name }}</li>
    <div class="options">
      <a href="/admin/choices/edit/{{ $choice->id }}">選択肢名を編集</a><br>
      <a href="/admin/choices/delete/{{ $choice->id }}">選択肢を削除</a>
    </div>
  @endforeach
  </ul>
  <div class="options">
    <a href="/admin/choices/{{ $question->id }}/add">＋新しい選択肢を追加</a><br>
    <a href="/admin/small_questions/{{ $question->big_question_id }}">設問の一覧に戻る</a>
  </div>
@endsection


</body>

</html>
