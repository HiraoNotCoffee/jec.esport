@extends('layouts.app')

@section('content')

<!-- {{ var_dump($userlist) }} <br> -->

<h1>ユーザー一覧</h1>

@foreach($userlist as $key => $value)
<form class="" action="index.html" method="post">
<input type="hidden" name="id" value="{{ $value['id'] }}">
<a href="{{ asset('/user/index/'.$value['id']) }}">
    <img src="{{ asset('storage/'. $value['icon']) }}" alt="アイコン画像">
    {{ $value['name'] }}
    {{ $value['title_name'] }}
    {{ $value['genre'] }}
    {{ $value['detail'] }}
 </a>
</form>
<br>
@endforeach

@endsection
