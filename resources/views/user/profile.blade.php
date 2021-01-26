@extends('layouts.app')

@section('content')
<?php
  if(isset($_POST['name'])){
    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $play_environment = $_POST['platform'];
    $title = $_POST['gametitle'];
  }

 ?>

   <p>画像</p>
   <p>画像</p>
   <p>ユーザー名</p>
   <?php echo $name ?>
   <p>プラットフォーム名</p>
   <?php echo $play_environment ?>
   <p>ゲームタイトル名</p>
   <?php echo $title ?>
   <h1>SNS</h1>
   <ul>
     <li></li>
     <li></li>
     <li></li>
     <li></li>
   </ul>
   <?php echo $detail ?>



@endsection
