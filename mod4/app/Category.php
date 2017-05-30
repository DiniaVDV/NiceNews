<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function listOfCategories()
	{
		return Category::all();
	}
	

    public static function getArticles($categoryName)
	{
		$category = Category::where('name', $categoryName)->first();
		$categoryId = $category->id;
		$articles = Category::getArticlesById($categoryId);
		return array( 'articles' => $articles, 'category' =>  $category );
	}	
	
	public static function getArticlesForCategories()
	{
		$categoryArticles= array();
		$categories = Category::all();
		foreach($categories as $category){
			$categoryId = $category->id;
			$articles = Category::getArticlesById($categoryId);
			$categoryArticles[$categoryId] = $articles;
		}
		
		return $categoryArticles;
	}	
	
	public static function getArticlesById($categoryId)
	{
		$articles = Category::find($categoryId)->articles()->orderBy('published_at')->get();
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
