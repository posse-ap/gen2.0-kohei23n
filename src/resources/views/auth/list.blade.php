@extends('layouts.app')

@section('title', 'クイズ一覧')

@section('content')
  @foreach ($links as $link)
  <div class="big_questions_container">
    <a href="{{ route('questions', ['id' => $link->id])  }}">{{$link->name}}</a>
  </div>
  @endforeach
@endsection 


