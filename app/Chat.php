<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $fillable = [
      'id','send','receive','message',
  ];

  public static function getData($id, $id_){
    return self::orWhere(function($query) use ($id, $id_){
                        $query->where('send', '=', $id)
                              ->where('receive', '=', $id_);
                    })
                  ->orWhere(function($query) use ($id, $id_){
                        $query->where('send', '=', $id_)
                              ->where('receive', '=', $id);
                    })->get()->toArray();
  }


}
