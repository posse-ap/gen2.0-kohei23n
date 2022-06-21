<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        @foreach ($links as $link)
        <div style="text-align: center">
          <a href="quiz/{{$link->id}}">{{$link->name}}</a>
        </div>
        @endforeach
      @endsection 


    </body>
</html>
