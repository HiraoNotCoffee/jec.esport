<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['id', 'title_id', 'body', 'user_id', 'post_kind'];

    public static function getData($id){
      return Post::where('id', $id)->get()->toArray()[0];
    }

    public static function getDataList(){
      return Post::get()->toArray();
    }
}
