@extends('layouts.app')

@section('content')

<form class="" action="{{ url('/user/edit') }}" method="post">
  @csrf
  <p>画像</p>
  <p>画像</p>
  <p>ユーザー名</p>
  <input type="text" name="name" value="" required>
  <p>プラットフォーム名</p>
  <select class="select_single" name="platform">
    <option value="A">A</option>
  </select>
  <p>ゲームタイトル名</p>
  <select class="select_single" name="gametitle">
    <option value="A">A</option>
  </select>
  <h1>SNS</h1>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <input type="submit" name="submit" value="プロフィールを編集する"><br>
  <textarea name="detail" rows="20" cols="80"></textarea>
</form>

@endsection
