<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function showListArticlesByTag($tagName)
    {
        $articlesTag = Tag::getTagId($tagName);
        $articles = $articlesTag['articles'];
        $tag = $articlesTag['tag'];
        return view('articles.listForTag', compact('articles', 'tag'));
    }
}
