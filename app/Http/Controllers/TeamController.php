<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use App\Activeweek;
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
          $active = Activeweek::getData($teamId);

          return view('team.index', compact('team', 'active'));
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

      for($i = 0; $i < 7; $i ++){
        Activeweek::create([
          'week' => $i,
          'detail' => "",
          'team_id' => $team['id'],
        ]);
      }

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
      if(!empty($team)){
          $active = Activeweek::getData($teamId);

          return view('team.edit', compact('team', 'active'));
      }

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


          Team::where('id', $teamId)->update([
            'icon' => $path,
          ]);
      }



      var_dump($request->active);
      foreach ($request->active as $key => $value) {

          Activeweek::where('week', $key)->where('team_id', $teamId)->update([
            'detail' => $value,
          ]);
      }
      // echo "<img src='". asset('storage/' . $path) . "'>";

      Team::where('id', $teamId)->update([
        'name' => $name,
        'detail' => $detail,
      ]);

      return redirect('team/index/'. $teamId);
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

    public function member(){
      $userId = Auth::id();
      $teamId = User::getTeamId($userId);
      $message = "";
      $member = [];
      if($teamId > -1){
        $member = User::getTeamMember($teamId);
      }
      else{
        $message = "あなたはチームに所属していません";
      }

      return view('team.member', compact(['member', 'message']));

    }

    public function remove(Request $request){
      $id = $request->id;
      User::where('id', $id)->update([
          'team_id' => null,
        ]);

      return redirect('team/member');

    }
}
