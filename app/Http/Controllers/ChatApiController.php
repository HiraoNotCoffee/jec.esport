<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chat;
class ChatApiController extends Controller
{

    /**
     * ほーむがめんを表示
     */
    public function getData(Request $request)
    {
      \Log::debug('jhoge');
      $comments = Chat::where('send', $request->recieve)->where('receive', $request->id)->where('id', '>', $request->last)->get()->toArray();
      $result = [];
      \Log::debug($comments);
      foreach ($comments as $key => $value) {
        $result += [
          $key => [
            0 => $value['message'],
            1 => $value['id'],
        ]
      ];
      }
      $json = ["data" => $result];
      return response()->json($json);
    }

    public function sendData(Request $request)
    {
      \Log::debug($request);
      $row = [
            'send' => $request->id,
            'receive' => $request->recieve,
            'message' => $request->data,
      ];
      \Log::debug($row);
      Chat::create($row);

      $json = ["comments" => $request->data];
      return response()->json($json);
    }
}
