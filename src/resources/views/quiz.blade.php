<!DOCTYPE html>
<html>
    <head>
        <title>quiz1</title> 
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>

        <div class="qDiv">
            @foreach ($questions as $question)
            <h1 class="nameunderline">{{$loop->iteration}}.この地名は何て読む？</h1>
            <img src="/images/{{$question->image}}" alt="">

            <ul class="ul" id="question{{$question->id}}_choices">
                @foreach ($choices[$loop->index] as $choice) 

                <li class="q" id="question{{$question->id}}_choice{{$loop->iteration}}"
                onclick="clickfunction({{$question->id}}, {{$loop->iteration}})"
                >
                {{$choice->name}}
                </li>
                @endforeach
            </ul>

            <div class="ansarea" id="answer_box{{$question->id}}">
                <p id="answer_message{{$question->id}}"></p>
                <p class="ansexp" id="answer_explain{{$question->id}}"></p>
            </div>

            @endforeach
        </div>
    </body>
    <script src="/js/main.js"></script>
</html>
