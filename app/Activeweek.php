<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activeweek extends Model
{
    protected $fillable=['id', 'week', 'detail', 'team_id'];

    public static function getData($id){
      $datas = self::where('team_id', $id)->get()->toArray();
      $result = [];
      foreach ($datas as $key => $value) {
        $result += [
          $key => $value['detail'],
        ];
      }

      return $result;
    }
}
