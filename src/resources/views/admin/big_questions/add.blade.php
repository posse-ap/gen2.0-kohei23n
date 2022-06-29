@extends('layouts.app')

@section('content')
  <form class="edit" action="" method="post">
  @csrf
    <input class="edit_input" type="text" name="title">
    <input type="submit" value="追加">
  </form>
@endsection

