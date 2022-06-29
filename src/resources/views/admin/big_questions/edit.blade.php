@extends('layouts.app')

@section('title', '大問の名前編集')

@section('content')
  <form class="edit" action="" method="post">
  @csrf 
    <input class="edit_input" type="text" name="title" value="{{ $big_question->name }}">
    <input type="submit" value="更新">
  </form>
@endsection 


