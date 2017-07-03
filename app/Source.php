<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{	
	/**
	 * [users description]
	 * @return [type] [description]
	 */
    public function users()
    {
    	return $this->belongsToMany('App\Source', 'source_user');
    }
}
