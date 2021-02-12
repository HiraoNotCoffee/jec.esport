<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index(){
      return view('contact.index');
    }

    public function post(Request $request){
      $name = $request->name;
      $mail = $request->mail;

      $body = $request->body;


      $contact = $request->all();
      // Mail::to('19jn0223@jec.ac.jp')
      //           ->send(new ContactMail($contact)); // 引数にリクエストデータを渡す


      Contact::create([
        'name' => $name,
        'mail' => $mail,
        'body' => $body,
      ]);

      return redirect('/contact/success');
    }

    public function rules()
    {
      return [
          'title' => 'required|unique:posts|max:255',
          'body' => 'required',
      ];
    }

    public function success(){
      return view('contact.success');
    }
}
