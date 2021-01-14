@extends('layouts.app')

<a href="{{ url('/post/postlist') }}">投稿一覧に戻る</a>
@section('content')
<form class="" action="{{ url('/post/postdetail') }}" method="postdetail">
@csrf

  <p>ゲームタイトル:{{$post['title_id']}}</p>
  <p>内容:{{$post['body']}}</p>
  <p>ユーザーID:{{$user['name']}}</p>
  <p>投稿種別{{$post['post_kind']}}</p>


</form>

@endsection
