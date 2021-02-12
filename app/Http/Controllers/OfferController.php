<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use Illuminate\Support\Facades\Auth;
use App\User;

class OfferController extends Controller
{


 public function __construct()
 {
     $this->middleware('auth');
 }

  public function index(){

    $this->middleware('auth');

    return view('offer.offer');

  }
  public function offer(Request $request){
    // おくりたいユーザーのID
    $userid = Auth::id();
    //送り元チームid
    $teamid = id::team_id();

    \Log::debug($userid);
    \Log::debug($teamid);

    //DB
    $data = Offer::create([
      'user_id' => $userid,
      'team_id' => $teamid,
    ]);

    



    //return redirect('/offer/offer/'. $data->id);
    return view('offer.offerdone');
  }


    public function detail(Request $request){
      $id = $request->id;

      $offer = Offer::getData($id);
      $team = Team::getTeam($team['team_id']);

      return view('offer.offerkeeplist', compact(['offer', 'team']));


      }

  public function keepsend(){
    return view('offer.offersend');
  }
  public function offerdone(Request $request){
    return view ('offer.offerdone');
  }

  public function offerlist(){

    $offers = Offer::getDataList();
    foreach ($offers as $key => $offer) {

    $team = Team::getTeam($request->team_id);
    $offers[$key] += [
      'team_name' => $user['name'],
    ];

  }
  return view('offer.offerkeeplist', compact('offers'));
}

}
