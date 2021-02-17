@extends('layouts.app')

@section('content')
<div class="boxa"> <img src="{{ url('/img/b.jpg') }}" alt="" class="box-inner-imga"> </div>
<section class="users">
  @foreach($users as $key => $val)
    <div class="box">
      <div class="box-inner"> <img src="{{ url('/img/a.jpg') }}" alt="" class="box-inner-img">
        <div class="box-inner-head">
          <p class="box-inner-name"><a href="{{ url('/user/profile/'. $val['id']) }}">{{ $val->name }}</a></p>
          <div class="box-inner-tegs">
            @if($val->title)
              <p class="box-inner-tag">{{ $game[$val->title] }}</p>
            @endif
          </div>
        </div>
      </div>
      <p class="box-detail">{{ $val->detail }} </p>
    </div>
  @endforeach
</section> <a href=" " class="button">移動する</a>
<div class="v_line_left">
  <p class="team">チーム一覧</p>
</div>
<section class="usersteam">
  @foreach($teams as $key => $val)
    <div class="box-team">
      <div class="box-inner-team"> <img src="{{ url('/img/a.jpg') }}" alt="" class="box-innerteam-img">
        <div class="box-innerteam-head">
          <p class="box-innerteam-name">{{ $val->team }}</p>
        </div>
      </div>
    </div>
  @endforeach
</section>
<a href=" " class="buttons">もっと見る</a>
<div class="boxb"> <img src="{{ url('/img/e.jpg') }}" alt="" class="abcd"> </div>
@endsection
