<<<<<<< HEAD:src/resources/views/auth/list.blade.php
@extends('layouts.app')

@section('title', 'クイズ一覧')

@section('content')
  @foreach ($links as $link)
  <div class="big_questions_container">
    <a href="{{ route('questions', ['id' => $link->id])  }}">{{$link->name}}</a>
  </div>
  @endforeach
@endsection 
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>設問追加</title>
        <style>div {text-align: center}</style>
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        <form action="" method="post">
          @csrf 
          <input type="text" name="choice">
          <input type="submit" value="追加">
        </form>
      @endsection 
>>>>>>> ba20a7048322f333d826321729f34658c6cc70d8:src/resources/views/admin/choices/add.blade.php


