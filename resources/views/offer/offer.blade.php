 @extends('layouts.app')


 @section('content')
<form class="" action="{{ url('/offer/offer') }}" method="offer">
 @csrf

  <p>ユーザ名</p>
  <p>オファーを本当に送信しますか?</p>
  <input type="submit" value="送信する">
  <input type="button" value="戻る">


</form>

@endsection

@php @endphp
