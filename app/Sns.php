<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sns extends Model
{
  protected $fillable = ['id','user_id','sns_id','url']  //
}
