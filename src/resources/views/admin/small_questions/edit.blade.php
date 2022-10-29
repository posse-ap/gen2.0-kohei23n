@extends('layouts.app')

@section('title', '設問を編集')

@section('content')
    <form class="edit" action="" method="post" enctype="multipart/form-data">
        @csrf
        <p>新しい画像を選択してください：</p>
        <div>
          <input type="file" name="image">
          <input type="submit" value="更新">
        </div>
        <p>今の画像：</p>
        <img src="/images/{{ $question->image }}" alt="">

    </form>
@endsection

