<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function users()
    {
      return $this->belongsToMany('App\User', 'language_user');
    }
}
