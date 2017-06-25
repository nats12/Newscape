<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	/**
	 * [category description]
	 * @return [type] [description]
	 */
    public function users()
    {
    	return $this->belongsToMany('App\User', 'category_user');
    }
}
