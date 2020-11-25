<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fileable=['id', 'title_id', 'body', 'user_id', 'post_kind'];
}
