<?php

namespace App\Http\Controllers;

use Gate;
use App\Article;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Auth\Access\Response;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{

    /**
     * Create a new articles controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    /**
     * Show all Article
     *
     * @return Response
     */

    public function index()
    {

        $articles = Article::latest('published_at')->published()->get();
        $latest = Article::latest()->get()->first();
        return view('index', compact('articles', 'latest'));
    }

    /**
     * Show a single Article
     *
     * @param Article $article
     * @return Response
     */

    public function show(Article $article)
    {
       // $article = Article::findOrFail($id);
		$catedArticle = Article::checkArticleOnSpec($article);
		$comments = $article->comments()->orderBy('created_at', "desc")->paginate(5);
		$users = User::usersForComments($comments);
		$categoryName = Category::where('id', $article->category_id)->get();
		return view('articles.show', compact('article', 'catedArticle', 'comments', 'users', 'categoryName'));
    }



    /**
     * Sync up the list of tags in the database.
     *
     * @param Article $article
     * @param array $tags
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }


	
}
