<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostController extends Controller
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

  public function index(){

    $this->middleware('auth');

    return view('post.post');

    }

    public function post(Request $request){

      $titleid = $request->title_id;
      $body = $request->body;
      $userid = Auth::id();
      $postkind = $request->post_kind;
      \Log::debug('$title_id');
      \Log::debug($titleid);
      $data = Post::create([
        'title_id' => $titleid,
        'body' => $body,
        'user_id' => $userid,
        'post_kind' => $postkind
      ]);

      return redirect('/post/postdetail/'. $data->id);

    }

    public function detail(Request $request){
      $id = $request->id;

      $post = Post::getData($id);
      $user = User::getUser($post['user_id']);
      return view('post.postdetail', compact(['post', 'user']));


    }

    public function viewlist(){

      $posts = Post::getDataList();
      foreach ($posts as $key => $post) {

        $user = User::getUser($post['user_id']);
        $posts[$key] += [
          'user_name' => $user['name'],
        ];
      }
      return view('post.postlist', compact('posts'));
    }






}
