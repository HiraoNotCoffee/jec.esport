<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;

class OfferController extends Controller
{
  public function index(){

    $this->middleware('auth');

    return view('offer.offer');

  }
  public function offer(Request $request){

    $userid = $request->user_id;
    $teamid = Auth::team_id();
    $reaction = $request->reaction;
    $flg = $request->flg;

    $data = Offer::create([
      'user_id' => $userid,
      'team_id' => $teamid,
      'reaction' => $reaction,
      'flg' => $flg
    ]);




    return redirect('/offer/offer/'. $data->id);
  }

    public function detail(Request $request){
      $id = $request->id;

      $offer = Offer::getData($id);
      $team = Team::getTeam($team['team_id']);

      return view('offer.offerkeeplist', compact(['offer', 'team']));


      }


  public function offerlist(){

    $offers = Offer::getDataList();
    foreach ($offers as $key => $offer) {

    $team = Team::getTeam($post['team_id']);
    $offers[$key] += [
      'team_name' => $user['name'],
    ];
  }
  return view('offer.offerkeeplist', compact('offers'));
}

}
