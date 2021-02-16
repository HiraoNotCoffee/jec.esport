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












  <p class="history"><a href="top.html">TOP</a> > <a href="user_list.html">ユーザー一覧</a> > ユーザー詳細</p>
  <div class="body">

  <img class="header" src="b.jpg" alt="ヘッダー画像">
  <img class="icon" src="a.jpg" alt="アイコン画像">

  <div class="right">
    <div class="image">
      <img class="sns" src="a.jpg" alt="SNS画像">
      <img class="sns" src="a.jpg" alt="SNS画像">
      <img class="sns" src="a.jpg" alt="SNS画像">
      <img class="sns" src="a.jpg" alt="SNS画像">
    </div>
    <input class="profile1" type="submit" name="profile" onclick="location.href='user_edit.html'" value="プロフィールを編集する">
    <input class="offer" type="submit" name="offer" onclick="location.href='send_offer.html'" value="オファーを送る">
  </div>
    <div class="detail">
      <h1 class="user">ユーザー名</h1>
      <p><span class="border">プラットフォーム名</span></p>
      <p><span class="border">ゲームタイトル名</span></p>
  </div>

  <h1 class="caption">所属チーム</h1>
  <div class="team">
    <table>
      <tr>
        <td rowspan="3"><img class="team_image" src="a.jpg" alt="チーム画像"></td>
        <td class="team_detail"><h1><a href="team_detail.html">チーム名</a></h1></td>
      </tr>
      <tr>
        <td class="team_detail"><p><span class="border">ゲームタイトル名</span></p></td>
      </tr>
      <tr>
        <td class="team_detail"><p><span class="border">プラットフォーム名</span></p></td>
      </tr>
    </table>
  </div>

  <p class="recruit">
    募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダ三ーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダ三ーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
  </p>

  <h1 class="caption">Youtube</h1>
  <div class="image2">
    <img class="youtube" src="a.jpg" alt="Youtube画像">
    <img class="youtube" src="a.jpg" alt="Youtube画像">
    <img class="youtube" src="a.jpg" alt="Youtube画像">
    <img class="youtube" src="a.jpg" alt="Youtube画像">
    <img class="youtube" src="a.jpg" alt="Youtube画像">
  </div>

  </div>

@endsection
