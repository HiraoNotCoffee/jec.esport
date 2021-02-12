<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSns extends Model
{
  protected $fillable = ['id','user_id','sns_id','url'];

  public static function getValue($id){
    if(self::where('user_id', $id)->doesntExist()){
      return "";
    }

    return self::where('user_id', $id)->value("sns_id");
  }

  public static function getDataList(){
    return self::get()->toArray();
  }

  public static function getData($sns_id){
    if(self::where('sns_id', $sns_id)->doesntExist()){
      return "";
    }

    return self::where('sns_id', $sns_id)->value();
  }

  public static function getUserData($userId, $snsId){
      if(self::where('sns_id', $snsId)->where("user_id", $userId)->doesntExist()){
        return "";
      }

      return self::where('sns_id', $snsId)->where("user_id", $userId)->value("url");
  }
}
