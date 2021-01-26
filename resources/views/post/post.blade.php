@extends('layouts.app')


@section('content')
<form class="" action="{{ url('/post/post') }}" method="post">
@csrf



  <input type="text" name="body" value="" >
  <select class="" name="title_id">
    <option value="1">パズドラ</option>
    <option value="2">モンスト</option>
  </select>

  <input type="radio" name="post_kind" value="0"/>通常投稿
  <input type="radio" name="post_kind" value="1"/>募集投稿

  <input type="submit" value="投稿" >


</form>

@endsection

<?php


















 ?>
