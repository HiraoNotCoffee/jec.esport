@extends('layouts.app')

@section('content')
  <p>完了いたしました</p>
<form class="" action="{{ url('/contact/success') }}" method="post">
  @csrf
  <input type="submit" name="submit" value="ホーム画面にもどる">

</form>

@endsection
