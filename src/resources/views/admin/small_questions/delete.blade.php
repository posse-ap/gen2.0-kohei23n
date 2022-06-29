@extends('layouts.app')

@section('title', '設問の削除')

@section('content')
  <form class="edit" action="" method="post">
    @csrf 
    <input type="hidden" name="id" value="{{ $question->id }}">
    <p>問題：</p>
    <img src="/images/{{ $question->image }}" alt=""><br>
    <input type="submit" value="削除">
  </form>
@endsection 
