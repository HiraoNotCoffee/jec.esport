@extends('layouts.app')

@section('content')
<form class="" action="{{ asset('/team/edit/post') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{ $team['id'] }}">
  <input type="text" name="name" value="{{ $team['name'] }}">
  <input type="text" name="detail" value="{{ $team['detail'] }}">

  <input type="file" name="mainImg" value="">

  <input type="submit" name="submit" value="送信">
</form>
@endsection
