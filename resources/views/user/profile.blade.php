@extends('layouts.app')

@section('content')

<p class="history"><a href="top.html">TOP</a> > <a href="user_list.html">ユーザー一覧</a> > <a href="user_detail.html">ユーザー詳細</a> > ユーザー編集</p>
<div class="body">

  <img class="header" src="b.jpg" alt="ヘッダー画像">
  <img class="icon" src="a.jpg" alt="アイコン画像">

  <div class="right">
    <input class="profile1" type="submit" name="profile" onclick="location.href='user_detail.html'" value="プロフィールを編集する">
  </div>
    <div class="detail2">
      <input class="username" type="text" name="username" value="ユーザー名">
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

  <h1 class="caption">SNS</h1>
  <div class="snsdetail">
    <table>
      <tr>
        <div class="snsid">
          <td><img class="sns1" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
        <td></td>
        <div class="snsid">
          <td><img class="sns2" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
      </tr>
      <tr>
        <div class="snsid">
          <td><img class="sns1" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
          </div>
          <td></td>
          <div class="snsid">
          <td><img class="sns2" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
      </tr><tr>
        <div class="snsid">
          <td><img class="sns1" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
        <td></td>
        <div class="snsid">
          <td><img class="sns2" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
      </tr><tr>
        <div class="snsid">
          <td><img class="sns1" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
        <td></td>
        <div class="snsid">
          <td><img class="sns2" src="a.jpg" alt="SNS画像"></td>
          <td><input class="snstext" type="text" name="" value=""></td>
        </div>
      </tr>
    </table>
  </div>

  <p class="recruit2">
    募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダ三ーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダ三ーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー募集文ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
  </p>

</div>


 <textarea name="detail" value="" rows="20" cols="80">{{ $user['detail'] }}</textarea>
</form>















@endsection
