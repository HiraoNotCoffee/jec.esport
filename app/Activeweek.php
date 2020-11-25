<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activeweek extends Model
{
    protected $fileable=['id', 'week', 'detail', 'user_id'];
}
