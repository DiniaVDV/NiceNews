<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class Article extends Model
{
    protected $fillable =[
        'title',
        'body',
        'created_at'
    ];

    protected $dates = ['published_at'];
    //
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * An article is owned by user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tags associated with the given article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
	{
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a tag id s associated with current article
     *
     * @return array
     */
    public function getTagListAttribute()
	{
        return $this->tags->pluck('id')->toArray();
    }
	
	public static function getLastThreeArticles()
	{
		return self::orderBy('published_at')->limit(3)->get();
	}
	
	public static function getSpecialArticle($article)
    {
		$shortArrayOfsentenses = array();
		$arrayOfsentenses = explode('.', $article->body);
		$i = 1;
			foreach($arrayOfsentenses as $sentense){
				if( $i <= 4){
					$shortArrayOfsentenses[] = $sentense;
				}else{
					break;
				}
				$i++;
			}
			$catArticle = implode('. ', $shortArrayOfsentenses);
			$catArticle.='...';
			$catedArticle[$article->id] = $catArticle;
				
        return $catedArticle;
    }
	
	public static function checkArticleOnSpec($article)
	{
	
		 if($article->special_section == 1){			 
			$catedArticle = self::getSpecialArticle($article);
	   }else{
		   $catedArticle = null;
	   }
	   
	   return $catedArticle;
	}
	public static function getSpecArticles()
	{
		$articles = self::where('special_section', 1)->paginate(5);
		return $articles;
	}
	
}
