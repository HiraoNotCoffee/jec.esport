@extends('layouts.app')


@section('content')
<form class="" action="{{ url('/offer/offersend') }}" method="post">
@csrf





  <p>ユーザ名</p>
  <a>オファーを本当に送信しますか?</a>
　
  <input type="submit" value="送信" >
   <button onclick="history.back()">戻る</button>

</form>

@endsection

@php @endphp
