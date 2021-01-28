@extends('layouts.app')


@section('content')
<form class="" action="{{ url('/offer/offerpost') }}" method="offer">
@csrf



  <input type="text" name="body" value="" >

  <p>ユーザ名</p>
  <a>オファーを本当に送信しますか?</a>

  <input type="submit" value="送信" >


</form>

@endsection

<?php
