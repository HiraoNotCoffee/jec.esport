<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      return view('user.index');
    }

    /*プロフィールに表示するユーザー名、プラットフォーム名、ゲームタイトル名、画像、
      SNS、紹介文を変更してUserテーブルをUPDATEする                          */
    public function edit(Request $request){
      /*$name = $request->name;
      $play_environment = $request->platform;
      $detail = $request->detail;
      \Log::debug($name);
      \Log::debug($play_environment);
      \Log::debug($detail);
      User::update([
        'name' => $name,
        'play_environment' => $play_environment,
        'detail' => $detail,
      ]);*/
      echo "<script>alert('編集が完了しました');</script>";
      return view('/user/profile');
    }

    public function profile(){
      return view('user.profile');
    }
}
