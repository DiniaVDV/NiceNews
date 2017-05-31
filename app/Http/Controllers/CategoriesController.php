<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class CategoriesController extends Controller
{
    public function showListArticles($categoryName)
    {
		
        $articlesCategory = Category::getArticles($categoryName);
        $articles = $articlesCategory['articles'];
        $category = $articlesCategory['category'];

        return view('articles.showListArticles', compact('articles', 'category'));
    }

    public function indexCat()
    {
        $categoryArticles = Category::getArticlesForCategories();
		$specCategoryArticles = Article::getSpecArticles();
		
        return view('index', compact('categoryArticles', 'specCategoryArticles'));
    }
}
