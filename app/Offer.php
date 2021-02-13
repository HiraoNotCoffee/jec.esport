<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
 protected $fillable = ['id','user_id','team_id','reaction','flg'];
}
