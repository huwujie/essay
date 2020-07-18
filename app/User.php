<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'validate_token', 'is_validate', 'avatar', 'provider', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /*
  * 关注我的用户
  */
    public function fans()
    {
        return $this->hasMany(Fan::class, 'follow_id', 'id');
    }

    /*
     * 我关注的用户
     */
    public function follows()
    {
        return $this->hasMany(Fan::class, 'fan_id', 'id');
    }

}
