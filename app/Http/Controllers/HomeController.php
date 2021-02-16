<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\GameTitle;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * ほーむがめんを表示
     */
    public function index()
    {
      return view('home');
    }

    public function top(){
      $users = User::getTopData();
      $teams = Team::getTopData();
      $game = GameTitle::get()->toArray();

      return view("welcome", compact(['users', 'teams', 'game']));
    }
}
 
