<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*protected $fileable=['id', 'title_id', 'body', 'user_id', 'post_kind'];

    public static function getData($id){
      if(self::where('user_id', $id)->doesntExist()){
        return "";
      }

      return self::where('user_id', $id)->value();
      */
    protected $fillable=['id', 'title_id', 'body', 'user_id', 'post_kind'];

    public static function getData($id){
      return Post::where('id', $id)->get()->toArray()[0];
    }

    public static function getDataList(){
      return Post::get()->toArray();
    }
}
