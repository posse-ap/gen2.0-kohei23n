@extends('layouts.app')

@section('title', 'クイズ一覧')

@section('content')
  @foreach ($links as $link)
  <div class="link">
    <a href="quiz/{{$link->id}}">{{$link->name}}</a>
  </div>
  @endforeach
@endsection 


