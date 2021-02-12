@extends('layouts.app')

@section('content')
<!--{{ var_dump($user) }}-->
 <img src="{{ asset('storage/'. $user['header']) }}" alt="ヘッダー画像">
 <img src="{{ asset('storage/'. $user['icon']) }}" alt="アイコン画像">
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
  <a href="{{ url('/user/profile') }}">プロフィールの編集</a>

  <form class="" action="{{ url('team/create') }}" method="post">
    @csrf
    <input type="submit" name="submit" value="チームの作成">
  </form>

  <br>
  <br>
  <h1>所属チーム</h1>
  <table>
    <tr>
      <th rowspan="4">画像</th>
    </tr>
    <tr>
      <td>チーム名</td>
    </tr>
    <tr>
      <td>{{ $user['platform'] }}</td>
    </tr>
    <tr>
      <td>{{ $user['title_name'] }}</td>
    </tr>
  </table>
  <br>
  <p>募集文</p>
  {{ $user['detail'] }}
  <h1>YouTube</h1>


@endsection
