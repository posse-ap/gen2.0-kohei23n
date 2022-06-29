@extends('layouts.app')

@section('content')
<form class="edit" action="" method="post" enctype="multipart/form-data">
  @csrf 
  <input type="file" name="image">
  <input type="submit" value="追加">
</form>
@endsection 

