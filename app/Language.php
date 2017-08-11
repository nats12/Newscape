<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{	
	/**
	 * [users description]
	 * @return [type] [description]
	 */
    public function users()
    {
      return $this->belongsToMany('App\User', 'language_user');
    }
}
