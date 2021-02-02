<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
// use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
class TeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){
      $teamId = $request->id;
      $team = Team::getTeam($teamId);
      if(!empty($team)){
          return view('team.index', compact('team'));
      }

      else{
        return \App::abort(404);
      }
    }

    public function create(){
      $userId = Auth::id();

      // ユーザーがチームに入っているかを確認
      if(User::getTeamId($userId) > -1){
        // 入っていたらそれを抜けるように表示
        session()->flash('flash_message', 'チームを脱退してから作成してください');
        return redirect('/user/profile');
      }

      // 入っていなかったらチームを作成
      $user = User::getUser($userId);
      $name = $user['name']. 'のチーム';
      $icon = $user['icon'];
      $team = Team::create([
        'name' => $name,
        'icon' => $icon,
      ]);

      User::where('id', $userId)->update([
        'team_id' => $team['id'],
      ]);

      return redirect('/team/index/'. $team['id']);
    }

    public function edit(){
      $userId = Auth::id();
      $teamId = User::getTeamId($userId);
      // ユーザーがチームに入っているかを確認
      if($teamId == -1){
        // 入っていたらそれを抜けるように表示
        session()->flash('flash_message', 'チームを作成してから編集してください');
        return redirect('/user/profile');
      }

      $team = Team::getTeam($teamId);
      echo $teamId;
      if(!empty($team)){
          return view('team.edit', compact('team'));
      }

      var_dump($team);

      // else{
      //   return \App::abort(404);
      // }
    }
    public function editPost(Request $request){
      $teamId = $request->id;
      $name = $request->name;
      $detail = $request->detail;

      if($file = $request->mainImg){
          $fileName = time() . $file->getClientOriginalName();
          $file->storeAs('/public/user', $fileName);
          $path = 'user/'. $fileName;
      }

      echo "<img src='". asset('storage/' . $path) . "'>";

      return ;
      //
      // $team = Team::getTeam($teamId);
      // if(!empty($team)){
      //     return view('team.edit', compact('team'));
      // }
      //
      // else{
      //   return \App::abort(404);
      // }
    }
}
