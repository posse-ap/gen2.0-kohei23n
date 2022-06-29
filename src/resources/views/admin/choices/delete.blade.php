@extends('layouts.app')

@section('title', '選択肢の削除')

@section('content')
  <form class="edit" action="" method="post">
    @csrf 
    <input type="hidden" name="id" value="{{ $choice->id }}">
    <p>選択肢：</p>
    <ul class="ul_edit">
      <li class="q_admin">{{ $choice->name }}</li>
    </ul>
    <input type="submit" value="削除">
  </form>
@endsection 

