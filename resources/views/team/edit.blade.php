@extends('layouts.app')

@section('content')
<form class="" action="{{ asset('/team/edit/post') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{ $team['id'] }}">
  <input type="text" name="name" value="{{ $team['name'] }}">
  <input type="text" name="detail" value="{{ $team['detail'] }}">

  <input type="file" name="mainImg" value="">

  <input type="活動日1" name="active[]" value="{{ $active[0] }}">
  <input type="活動日2" name="active[]" value="{{ $active[1] }}">
  <input type="活動日3" name="active[]" value="{{ $active[2] }}">
  <input type="活動日4" name="active[]" value="{{ $active[3] }}">
  <input type="活動日5" name="active[]" value="{{ $active[4] }}">
  <input type="活動日6" name="active[]" value="{{ $active[5] }}">
  <input type="活動日7" name="active[]" value="{{ $active[6] }}">

  <input type="submit" name="submit" value="送信">
</form>
@endsection
