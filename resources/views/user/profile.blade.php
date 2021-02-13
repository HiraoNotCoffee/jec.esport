@extends('layouts.app')

@section('content')

<form class="" action="{{ asset('/user/edit') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{ $user['id'] }}">
  <input type="file" name="header" value="">
  <input type="file" name="icon" value="">
  <h1>ユーザー名</h1>
  <input type="text" name="name" value="{{ $user['name'] }}" required>
  <p>プラットフォーム名</p>
  <select class="select_single" name="play_environment">
  @foreach($platform as $key => $val)
    @if($user['play_environment'] === $key)
      <option value="{{ $key }}" selected>{{ $val }}</option>
    @else
      <option value="{{ $key }}">{{ $val }}</option>
    @endif
  @endforeach
  </select>
  <p>ゲームタイトル名</p>
  <select class="select_single" name="title_id">
  @foreach($game_titles as $key => $val)
    @if($user['title_id'] === $val['id'])
      <option value="{{ $val['id'] }}" selected>{{ $val['title'] }}</option>
    @else
      <option value="{{ $val['id'] }}">{{ $val['title'] }}</option>
    @endif
  @endforeach
  </select><br>
  <input type="submit" name="submit" value="プロフィールを編集する">
  <h1>SNS</h1>
  <ul>
  <!-- twitter facebook youtube instagram -->
  @foreach($sns as $key => $val)
  <!--{{var_dump($val)  }}-->
    <li>{{ $val['name'] }} <input type="text" name="sns_{{ $val['id'] }}" value="{{ $val['val'] }}"></li>
  @endforeach
  </ul>
  <textarea name="detail" value="" rows="20" cols="80">{{ $user['detail'] }}</textarea>
</form>

@endsection
