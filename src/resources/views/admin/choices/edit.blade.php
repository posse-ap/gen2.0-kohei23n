@extends('layouts.app')

@section('title', '選択肢の編集')

      @section('content')
        <form class="edit" action="" method="post">
          @csrf 
          <input class="edit_input--small" type="text" name="choice" value="{{ $choice->name }}">
          <input type="submit" value="更新">
        </form>
      @endsection 


    </body>
</html>
