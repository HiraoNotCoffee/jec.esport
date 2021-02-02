<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ActiveWeeks;

class Team extends Model
{
  protected $fillable = [
      'id','name','detail','icon','week_id',
  ];

  public static function getTeam($id){
    if(self::where('id', $id)->doesntExist() ){
      return [];
    }

    return self::where('id', $id)->get()->toArray()[0];
  }
}
