<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTitle extends Model
{
    protected $fillable = ['id','title'];


    public static function getValue($id){
      if(self::where('id', $id)->doesntExist()){
        return "";
      }

      return self::where('id', $id)->value("title");
    }

    public static function getDataList(){
      return self::get()->toArray();
    }
}
