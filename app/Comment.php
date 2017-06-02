<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	 /**
     * Get the article associated with the given comment
     *
     * @return mixed
     */
    public function articles()
	{
        return $this->belongsToMany('App\Article');
    }
}
