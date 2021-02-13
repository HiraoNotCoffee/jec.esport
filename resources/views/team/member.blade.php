@extends('layouts.app')

@section('content')
@if($message != "")

  {{ $message }}

@endif


  @foreach ($member as $key => $val)
    <div>
        {{ $val['name'] }}
        <form class="" action="{{ url('team/remove') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $val['id'] }}">
          <input type="submit" name="submit" value="このユーザーを除隊する">
        </form>
    </div>
  @endforeach
@endsection
