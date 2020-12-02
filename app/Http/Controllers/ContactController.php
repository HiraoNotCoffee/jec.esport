<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function index(){
      return view('contact.index');
    }

    public function post(Request $request){
      $name = $request->name;
      $mail = $request->mail;
      $body = $request->body;
      \Log::debug($name);
      \Log::debug($mail);
      \Log::debug($body);
      \Log::debug('hhhhhhh');
      Contact::create([
        'name' => $name,
        'mail' => $mail,
        'body' => $body,
      ]);

      return redirect('/contact/success');
    }

    public function success(){
      return view('contact.success');
    }
}
