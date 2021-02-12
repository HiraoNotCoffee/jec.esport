<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Chat;
use App\User;
class ChatController extends Controller
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

    /**
     * ほーむがめんを表示
     */
    public function index(Request $request)
    {
      $id = Auth::id();
      $receiveId = $request->id;
      if(!User::where('id', $receiveId)->exists()){
        return redirect('/');
      }

      $message = Chat::getData($id, $receiveId);

      return view('chat.index', compact(['id', 'message', 'receiveId']));
    }

    public function top(){


      return view("welcome");
    }
}
