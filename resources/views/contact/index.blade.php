@extends('layouts.app')

@section('content')

<form class="" action="{{ url('/contact/post') }}" method="post">
  @csrf
  <p class="history"><a href="top.html">TOP</a> > お問い合わせ</p>
  <section class="contactbox">
     <form action="top.html" method="post">
       <h1>お問い合わせ</h1>
       <p>お名前</p>
       <input class="text" type="text" name="name" value="">
       <p>メールアドレス</p>
       <input class="text" type="text" name="mail" value="">
       <p>お問い合わせ</p>
       <p><textarea class="area" rows="6"cols="43"></textarea></p>
       <p><input class="contact" type="submit" name="send" value="送信"></p>
     </form>
  </section>
</form>




@endsection
