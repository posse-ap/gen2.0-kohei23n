<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
        <style>
          div {text-align: center}
          a {text-align: center}
        </style>
    </head>
    <body>
      @extends('layouts.app')

      @section('content')
        <form action="" method="post">
        <table>
          @csrf 
          <input type="hidden" name="id" value="{{ $question->id }}">
          <tr>
            <th>問題：</th>
            <img src="/images/{{ $question->image }}" alt="">
          </tr>
          <tr>
            <th></th>
            <td><input type="submit" value="削除"></td>
          </tr>
        </table>
        </form>
      @endsection 


    </body>
</html>
