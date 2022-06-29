@extends('layouts.app')

@section('title', '大問の削除')

@section('content')
  <form class="edit" action="" method="post">
    @csrf 
    <input type="hidden" name="id" value="{{ $big_question->id }}">
    <p>タイトル：</p>
    <p>{{ $big_question->name }}</p>
    <input type="submit" value="削除">
  </form>
@endsection 
