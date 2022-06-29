@extends('layouts.app')

@section('title', '大問一覧')


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
    <div class="list_add">
      <a class href="/admin/big_questions/add">＋新しいタイトルを追加</a>
      <button id="submit">並び替えを更新</button>
    </div>
  </form>
@endsection 

@section('script')
<script src="{{ asset('js/sort.js') }}"></script>
@endsection 

