<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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


      return view("welcome");
    }
}
