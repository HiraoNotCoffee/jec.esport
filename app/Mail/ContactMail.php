<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // 引数で受け取ったデータ用の変数
    protected $contact;

    public function __construct($contact)
    {
      // 引数で受け取ったデータを変数にセット
      $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      \Log::debug($this->contact);

        return $this
          ->from('hiraku.program@gmail.com') // 送信元
          ->subject('お問い合わせ') // メールタイトル
          ->view('contact.mail') // どのテンプレートを呼び出すか
          ->with(['contact' => $this->contact]); // withオプションでセットしたデータをテンプレートへ受け渡す
    }
}
