@extends('layouts.app')


@section('content')
<form class="" action="{{ url('/offer/offerdone') }}" method="post">
@csrf



  <input type="text" name="body" value="" >

  <p>送信完了</p>
  <a href="./offerkeeplist">承認待ちリスト</a>

  <a href="./">


</form>

@endsection

<?php
