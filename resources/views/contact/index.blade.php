@extends('layouts.app')

@section('content')

<form class="" action="{{ url('/contact/post') }}" method="post">
  @csrf
  <label for>お問い合わせ</label></br>
  <label for>お名前<label>
  <input type="text" name="name" value="" required>
  <label for>メールアドレス</label>
  <input type="text" name="mail" value="" required>
  <label for>お問い合わせの内容</label>
  <input type="text" name="body" value="" required>
  <input type="submit" name="submit" value="送信">

</form>

@endsection
