<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'twitter_id',
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
     * [categories description]
     * @return [type] [description]
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }


    /**
     * [categories description]
     * @return [type] [description]
     */
    public function sources()
    {
        return $this->belongsToMany('App\Source');
    }
}
