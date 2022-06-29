<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>タイトル追加</title>
        <style>div {text-align: center}</style>
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        <form action="" method="post">
          @csrf 
          <input type="text" name="title" value="{{ $big_question->name }}">
          <input type="submit" value="更新">
        </form>
      @endsection 


    </body>
</html>
