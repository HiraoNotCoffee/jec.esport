@extends('layouts.app')

@section('content')
<form class="" action="{{ asset('/team/edit/post') }}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{ $team['id'] }}">
  <input type="text" name="name" value="{{ $team['name'] }}">
  <input type="text" name="detail" value="{{ $team['detail'] }}">

  <input type="file" name="mainImg" value="">

  <input type="活動日1" name="active[]" value="{{ $active[0] }}">
  <input type="活動日2" name="active[]" value="{{ $active[1] }}">
  <input type="活動日3" name="active[]" value="{{ $active[2] }}">
  <input type="活動日4" name="active[]" value="{{ $active[3] }}">
  <input type="活動日5" name="active[]" value="{{ $active[4] }}">
  <input type="活動日6" name="active[]" value="{{ $active[5] }}">
  <input type="活動日7" name="active[]" value="{{ $active[6] }}">

  <input type="submit" name="submit" value="送信">
</form>











<a href="#">
  <p>サービス</p>
</a>
<nav class="a-nav">
  <ul>
    <li><a href="login.html">ログイン</a></li>
    <li><a href="register.html">会員登録</a></li>
  </ul>
</nav>
</header>
<p class="history"><a href="top.html">TOP</a> > <a href="team_list.html">チーム一覧</a> > <a href="team_detail.html">チーム詳細</a> > チーム編集</p>
<div class="body">


<img class="wall-paper" src="teamwall.jpg" alt="ヘッダー画像">
<img class="team-icon" src="teamicon.jpg" alt="アイコン画像">

<div class="right">

  <input class="profile1" type="submit" name="profile" onclick="location.href='team_detail.html'" value="プロフィールを編集する">
</div>
<div class="detail">
  <input class="teamname" type="text" name="username" value="チーム名">
  <div class="fontcolor">
    プラットフォーム名
    <select class="platform" name="platform">
      <option value="">プラットフォーム名</option>
      <option value="1">PC</option>
      <option value="2">PS4</option>
      <option value="3">スマホ</option>
    </select>
  </div>
  <div class="fontcolor">
    ゲームタイトル名
    <select class="gametitle" name="gametitle">
      <option value="">ゲームタイトル名</option>
      <option value="1">ApexLegends</option>
      <option value="2">Bloodborne</option>
      <option value="3">CallOfDuty</option>
    </select>
  </div>
</div>

<h1 class="caption">活動日</h1>
<section class="weeks">
  <!-- <div class="activeweek"> -->
  <p class="week">月曜日<input class="time" type="text" name="timezone" value=""></p>
  <p class="week">金曜日<input class="time" type="text" name="timezone" value=""></p>
  <p class="week">火曜日<input class="time" type="text" name="timezone" value=""></p>
  <p class="week">土曜日<input class="time" type="text" name="timezone" value=""></p>
  <p class="week">水曜日<input class="time" type="text" name="timezone" value=""></p>
  <p class="week">日曜日<input class="time" type="text" name="timezone" value=""></p>
  <p class="week">木曜日<input class="time" type="text" name="timezone" value=""></p>
  <!-- </div> -->
</section>
<p class="recruit">
    募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダ三ーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダ三ーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
</p>
<div class="con">
  <a href="contact.html"><span>お問い合わせ</span></a>
  <a href="contact.html"><img src="teamwall.jpg" alt="お問い合わせ"></a>
</div>
@endsection
