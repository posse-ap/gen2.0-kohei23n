<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>クイズ一覧</title>
    </head>
    <body>
      @foreach ($bigQuestions as $bigQuestion)
      <div class="big_questions_container">
        <a href="quiz/{{$bigQuestion->id}}">{{$bigQuestion->name}}</a>
      </div>
      @endforeach
    </body>
</html>
