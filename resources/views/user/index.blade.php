@extends('layouts.app')

@section('content')


<p class="history"><a href="top.html">TOP</a> > <a href="user_list.html">ユーザー一覧</a> > ユーザー詳細</p>
<div class="body">

<img class="header" src="{{ asset('storage/'. $user['header']) }}" alt="ヘッダー画像">
<img class="icon" src="{{ asset('storage/'. $user['icon']) }}" alt="アイコン画像">

<div class="right">
  <div class="image">
    @foreach($sns as $key => $val)
    <a href="{{ url($val['url']) }}">
      <img class="sns" src="{{ url('/storage/'.$val['icon']) }}" alt="SNS画像">
    </a>
    @endforeach
  </div>
  @if(Auth::check() && Auth::id() == $user['id'])
    <a href="{{ url('user/edit') }}" class="profile1" >プロフィールを編集する</a>
  @else
    <a href="{{ url('offer/send/'. $user['id']) }}" class="profile1" >オファーを送る</a>
  @endif

</div>
  <div class="detail">
    <h1 class="user">{{ $user['name'] }}</h1>
    @if($user['title_id'])
      <p><span class="border">{{ $game[$user['title_id']] }}</span></p>
    @endif
</div>

<h1 class="caption">所属チーム</h1>
<div class="team">
  @if(!empty($team))
  <table>
    <tr>
      <td rowspan="3"><img class="team_image" src="{{ url('/storage/img/'.$team['icon']) }}" alt="チーム画像"></td>
      <td class="team_detail"><h1><a href="team_detail.html">{{ $team['name'] }}</a></h1></td>
    </tr>
    <tr>
      <td class="team_detail"><p><span class="border">{{ $team['title_name'] }}</span></p></td>
    </tr>
  </table>
  @else
  <p>未所属</p>
  @endif
</div>

<p class="recruit">
  {{ $user['detail'] }}
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
