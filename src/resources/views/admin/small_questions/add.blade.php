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
        <form action="" method="post" enctype="multipart/form-data">
          @csrf 
          <input type="file" name="image">
          <input type="submit" value="追加">
        </form>
      @endsection 


    </body>
</html>
