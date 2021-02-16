@extends('layouts.app')

@section('content')

<p class="history"><a href="top.html">TOP</a> > ユーザー一覧</p>
<section class="body">
  <h1 class="caption2">ユーザー一覧</h1>

<div class="users">
  @foreach($users as $key => $val)
    <div class="userbox">
      <div class="box-inner">
        <img src="a.jpg" alt="" class="box-inner-img">
        <div class="box-inner-head">
          <p class="box-inner-name"><a href="{{ url('/user/profile/'. $val['id']) }}">{{ $val['name'] }}</a></p>
          <div class="box-inner-tegs">
            @if(isset($val['title']))
              <p class="box-inner-tag">{{ $game[$val['title']] }}</p>
            @endif
          </div>
        </div>
      </div>
      <p class="box-detail">
        {{ $val['detail'] }}
      </p>
    </div>
  @endforeach
</div>
</section>

</div>
@endsection
