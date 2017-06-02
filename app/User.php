<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * A user can have a many articles
     *
     *@return \Illumminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function isATeamManager(){
        return false;

    }
	 /**
     * Get the roles associated with the given user.
	 *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role');
    }
	 /**
     * A user can have a many comments.
     *
     *@return \Illumminate\Database\Eloquent\Relations\HasMany
     */
	public function comments()
    {
        return $this->hasMany('App\Comment');
    }
	
	public function isThe($roleName)
    {
		foreach($this->roles()->get() as $role){
			if($role->name == $roleName){
				return true;
			}
		}
        return false;
    }	
	
	public static function usersForComments($comments)
	{
		$users = array();
		foreach($comments as $comment){
			$user = self::where('id', $comment->user_id)->get();
			$users[$comment->id] = $user;
		}

		return $users;
	}
}
