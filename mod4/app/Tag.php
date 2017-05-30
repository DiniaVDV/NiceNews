<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{

    /**
     * Fillable fields for a tag.
     *
     * @var array
     */
    protected $fillable =[
        'name'
    ];
    /**
     * Get the article associated with the given tag
     *
     * @return mixed
     */
    public function articles()
	{
        return $this->belongsToMany('App\Article');
    }
	
	
	public static function getTagId($tagName)
	{
		$tag = self::where('name', $tagName)->first();
		$tagId = $tag->id;
		$articles = Tag::find($tagId)->articles()->orderBy('published_at')->get();
        return array('articles' => $articles, 'tag' => $tag );
    }
	
}
