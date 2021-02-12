@extends('layouts.app')

@section('content')
<!--
  {{ var_dump($user) }}<br>
  {{ var_dump($sns) }}<br>
  {{ var_dump($post) }}<br>
@if(!empty($team))
  {{ var_dump($team) }}<br>
@endif
-->

  <img src="{{ asset('storage/'. $user['header']) }}" name="header" alt="ヘッダー画像">
  <img src="{{ asset('storage/'. $user['icon']) }}" name="icon" alt="アイコン画像">
  <h1>ユーザー名</h1>
  {{ $user['name'] }}
  <p>プラットフォーム名</p>
  {{ $user['platform'] }}
  <p>ゲームタイトル名</p>
  {{ $user['title_name'] }}
  <p>
  @foreach ($sns as $key => $value)
    {{ $value['val']  }}
  @endforeach
  </p>
  <br>
  @if($user['id'] == Auth::id())
    <a href="{{ asset('/user/profile') }}"><button name="profile">プロフィールの編集</button></a>
  @else
    <a href="{{ asset('/offer') }}"><button name="offer">オファーを送る</button></a>
  @endif
</form>
<br>
<br>
<h1>所属チーム</h1>
@if(!empty($team))
<table>
  <tr>
    <th rowspan="4"><img src="{{ asset('storage/'. $team['icon']) }}" name="icon" alt="アイコン"></th>
  </tr>
  <tr>
    <td>{{ $team['name'] }}</td>
  </tr>
  <tr>
    <td>{{ $user['platform'] }}</td>
  </tr>
  <tr>
    <td>{{ $user['title_name'] }}</td>
  </tr>
</table>
@else
  <p>未所属</p>
@endif
<br>
<p>募集文</p>
{{ $user['detail'] }}
<h1>YouTube</h1>

@endsection
