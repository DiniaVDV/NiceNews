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


    /**
     * @param $tagName
     * @return array
     */
    public static function getTagId($tagName)
	{
		$tag = self::where('name', $tagName)->first();
		$tagId = $tag->id;
		$articles = Tag::find($tagId)->articles()->orderBy('published_at')->paginate(1);
        return array('articles' => $articles, 'tag' => $tag );
    }

    public static function getTagsId()
    {
        $tags = Tag::pluck('name', 'id');
        return $tags;
    }
	
}
