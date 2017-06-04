<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'position',
        'special_category',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function listOfCategories()
	{
		return self::all();
	}


    /**
     * Get articles by category name.
     *
     * @param $categoryName
     * @return array
     */
    public static function getArticles($categoryName)
	{
		$category = self::where('name', $categoryName)->first();
		if($category->special_category == 1){
			$allArticles = Article::all();
			foreach($allArticles as $article){
				if($article->special_section == 1){
					$articles[] = $article;
				}
			}
		}else{
			$categoryId = $category->id;
			$articles = self::getArticlesById($categoryId);
		}
		return array( 'articles' => $articles, 'category' =>  $category );
	}

    /**
     * @return array
     */
    public static function getArticlesForCategories()
	{
		$categoryArticles= array();
		$categories = self::all();
		foreach($categories as $category){
			$categoryId = $category->id;
			$articles = self::getArticlesById($categoryId);
			$categoryArticles[$categoryId] = $articles;
		}
		
		return $categoryArticles;
	}

    /**
     * @param $categoryId
     * @return mixed
     */
    public static function getArticlesById($categoryId)
	{
		$articles = self::find($categoryId)->articles()->orderBy('published_at')->paginate(4);
		return $articles;
	}
	
	/**
     * A category can have a many articles.
     *
     *@return \Illumminate\Database\Eloquent\Relations\HasMany
     */
	public function articles()
    {
        return $this->hasMany('App\Article');
    }
	

	
}
