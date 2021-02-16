@extends('layouts.app')

@section('content')

<form class="" action="{{ asset('/user/edit') }}" method="post" enctype="multipart/form-data">
  @csrf
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
      ?>
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
   </select>
   <p><input type="submit" name="submit" value="プロフィールを編集する" onclick="history.back()"></p>
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



@endsection
