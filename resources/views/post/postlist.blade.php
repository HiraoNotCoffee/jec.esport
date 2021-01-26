@extends('layouts.app')


@section('content')

  @foreach($posts as $key => $value)

  <a href="{{url('/post/postdetail/'. $value['id']) }}"> 詳しく見る</a>
  <p>ユーザーID:{{$value['user_name']}}</p>
  <p>ゲームタイトル:{{$value['title_id']}}</p>
  <p>投稿種別{{$value['post_kind']}}</p>
  @endforeach

@endsection
