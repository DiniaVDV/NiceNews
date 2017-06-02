<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Article;



class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $categories = Article::getCategories($articles);
        $users = Article::getUsers($articles);

        return view('admin.articles.show', compact('articles', 'categories', 'users'));
    }
}
