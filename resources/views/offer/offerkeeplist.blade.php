@extends('layouts.app')


@section('content')
<form class="" action="{{ url('/offer/offerdone') }}" method="post">
@csrf



  <input type="text" name="body" value="" >




  <a href="./">


</form>

@endsection

<?php
