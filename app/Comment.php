<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


/**
 * Class Comment
 * @package App
 */
class Comment extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'message',
        'status',
        'like'
    ];

    /**
     * @var array
     */
    protected $dates = ['published_at'];

	 /**
     * Get the article associated with the given comment
     *
     * @return mixed
     */
    public function articles()
	{
        return $this->belongsToMany('App\Article');
    }

    /**
     * @return array
     */
    public static function getTopUsers()
    {

        $topUsersComments = array();

        $comments = Comment::groupBy('user_id')->limit(5)->get();

        foreach ($comments as $comment){
            $topUsersComments[] = User::findOrFail($comment->user_id);
        }

        return $topUsersComments;
    }

    /**
     * An comment is owned by user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return array
     */
    public static function getLastFourComments()
    {
        $user = array();
        $lastFourComments = Comment::where('status', 'check')->orderBy('created_at', 'desc')->limit(3)->get();
        foreach ($lastFourComments as $lastFourComment){
            $user[$lastFourComment->id] = self::findOrFail($lastFourComment->id)->user()->get();
            $lastFourComment->message = self::catComments($lastFourComment->message);
        }
        return array('lastFourComments' => $lastFourComments, 'user' => $user);
    }

    /**
     * @param $comment
     * @return string
     */
    public static function catComments($comment)
    {
        $comment = substr($comment, 0, 20);
        return $comment;
    }
}
