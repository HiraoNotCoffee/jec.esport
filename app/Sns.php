<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sns extends Model
{


  protected $fillable = ['id','name','icon','url'];

  public static function getData($id){
    return self::where('id', $id)->get()->toArray()[0];
  }

  public static function getDataList(){
    return self::get()->toArray();
  }
}
