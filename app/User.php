<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','detail','icon','header','staff_flg',
        'play_environment','title_id','team_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * ゆーざーについて取得
    *
    */
    public static function getUser($id){
      $user = User::where('id', $id)->get()->toArray()[0];
      return $user;
    }

    /*
    * チームIDを取得
    * 入っていなかったら -1 を返す
    * @return boolean
    */
    public static function getTeamId($id){
      $team_id = self::where('id', $id)->value('team_id');
      if(!is_NULL($team_id))  {
        return $team_id;
      }
      else{
        return -1;
      }
    }


      public static function getTeamMember($id){

          return self::where('team_id', $id)->get()->toArray();
      }


}
