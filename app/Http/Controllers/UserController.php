<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\User;
use App\User;
use App\GameTitle;
use App\UserSns;
use App\Sns;
use App\Post;

class UserController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth')->except(['profile', 'list']);
  }

  public function index(){
    $userId = Auth::id();
    $user = User::getUser($userId);
    $platform = config('platform');
    $team = Team::getTeam($userId);
    $sns = Sns::getDataList();
    foreach ($sns as $key => $value) {
    $id = $value['id'];  // sns のID
    $userSns = UserSns::getUserData($userId, $id);

    $sns[$key] += [
        'val' => $userSns,
      ];
    }

    $post = Post::getData($userId);
      // ユーザーが現在DBに保存してる情報をとってくる
      //$userSns = UserSns::getValue($userId);
      // そのとってきた情報に対応するSNSの情報を取得する
      $userPlatform = "";
      if($user['play_environment']){
        $userPlatform = $platform[$user['play_environment']];
      }

      $user += [
        'title_name' => GameTitle::getValue($user['title_id']),
        'platform' => $userPlatform,
      ];
      return view('user.index', compact(['user', 'sns', 'post', 'team']));
  }

    /* プロフィールに表示するユーザー名、プラットフォーム名、
     *ゲームタイトル名、画像、SNS、紹介文を変更してUserテーブルをUPDATEする
     */
  public function edit(Request $request){
    \Log::debug('------------------');
    $name = $request->name;
    $play_environment = $request->play_environment;
    $detail = $request->detail;
    $title_id = $request->title_id;
    $userId = Auth::id();
    // \Log::debug($name);
    // \Log::debug($play_environment);
    // \Log::debug($detail);
    // \Log::debug($title_id);
    // \Log::debug($header);
    // \Log::debug($icon);

    \Log::debug($request);
    $array = [
      'name' => $name,
      'play_environment' => $play_environment,
      'title_id' => $title_id,
      'detail' => $detail,
    ];
    if($file = $request->header){
      $fileName = time() . $file->getClientOriginalName();
      $file->storeAs('/public/user', $fileName);
      $path = 'user/' . $fileName;
      $array += [
        'header' => $path,
      ];
    }
    if($file = $request->icon){
      $fileName = time() . $file->getClientOriginalName();
      $file->storeAs('/public/user', $fileName);
      $path = 'user/' . $fileName;
      $array += [
        'icon' => $path,
      ];
    }

    User::where('id', $userId) -> update($array);

    $sns = Sns::getDataList();
  foreach ($sns as $key => $value) {
    var_dump($key);
    $id = $value['id'];  // sns のID

    $url = $request['sns_'. $id];

    //var_dump($url);
    //echo '-------';
    //ユーザーが存在していたらUpdate、存在していなかったらInsert
    if(UserSns::getUserData($userId, $id) != ""){
      UserSns::where('sns_id', $id)->where('user_id', $userId)->update(['url' => $url]);
    }
    else{
      UserSns::create([
        'user_id' => $userId,
        'sns_id' => $id,
        'url' => $url,
      ]);
    }
  }
    echo "<script>alert('編集が完了しました');</script>";
    return redirect('/user');
  }


  public function profile(Request $request){
    $userId = $request->id;
    $user = User::getUser($userId);
    $platform = config('platform');
    $game_titles = GameTitle::getDataList();
    // $sns = Sns::getData($userId);
    $sns = Sns::getDataList();

    foreach ($sns as $key => $value) {
      $id = $value['id'];  // sns のID
      $userSns = UserSns::getUserData($userId, $id);

      $sns[$key] += [
        'val' => $userSns,
      ];
    }
    return view('user.index', compact(['user', 'game_titles', 'platform', 'sns']));
  }

  public function myProfile(){

    if(Auth::check()){
      return redirect('user/profile/'. Auth::id());
    }
    else{
      return \App::abort(404);
    }

  }

  public function list(){
    $users = User::getDataList();
    $game = GameTitle::get()->toArray();

    return view('user.list', compact(['users', 'game']));
  }
}
