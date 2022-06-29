@extends('layouts.app')

@section('title', '選択肢の追加')

@section('content')
  <form class="edit" action="" method="post">
  @csrf
    <input class="edit_input--small" type="text" name="choice">
    <input type="submit" value="追加">
  </form>
@endsection
