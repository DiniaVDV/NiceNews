<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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

    public static function getTopUsers()
    {
        $topUsersComments = array();
        $comments = Comment::groupBy('user_id')->limit(5)->get();
        foreach ($comments as $comment){
            $topUsersComments[] = User::findOrFail($comment->user_id);
        }
        return $topUsersComments;
    }
}
