@extends('layouts.app')

@section('title', '大問の追加')

@section('content')
  <form class="edit" action="" method="post">
  @csrf
    <input class="edit_input" type="text" name="title">
    <input type="submit" value="追加">
  </form>
@endsection

