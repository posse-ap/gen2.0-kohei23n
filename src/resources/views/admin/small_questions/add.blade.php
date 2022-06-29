@extends('layouts.app')

@section('title', '設問を追加')

@section('content')
<form class="edit" action="" method="post" enctype="multipart/form-data">
  @csrf 
  <input type="file" name="image">
  <input type="submit" value="追加">
</form>
@endsection 

