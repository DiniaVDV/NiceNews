<?php

namespace App\Http\Controllers;

use Gate;
use App\Article;
use App\Tag;
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
		
		return view('articles.show', compact('article', 'catedArticle'));
    }

    /**
     * Show the page to create a new Article
     *
     * @return Response
     */

    public function create()
    {
        $tags = Tag::pluck('name', 'id');
        return view('articles.create', compact('tags'));
    }

    /**
     * Save a new Article
     *
     * @param ArticleRequest $request
     * @return Response
     */

    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);
        //Article::create($request->all());
        //session()->flash('flash_message', 'You article has been created!');
        return redirect('/')->with([
            'flash_message' => 'You article has been created!',
            'flash_message_important' => true

        ]);
    }

    /* Edit an Article
     *
     *
     * @return Response
     */

    public function edit(Article $article)
    {


        if (Gate::denies('edit-article', $article)) {
            abort(403, 'Unauthorized action.');
        }
       // $article = Article::findOrFail($id);
        $tags = Tag::pluck('name', 'id');
        return view('articles.edit', compact('article', 'tags'));

    }

    public function update(Article $article, ArticleRequest $request)
    {
        //$article = Article::findOrFail($id);

        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));
		$catedArticle = null;
        return view('articles.show', compact('article', 'catedArticle'));

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


    /**
     *
     * Save a new article.
     * @param ArticleRequest $request
     * @return Article
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = new Article($request->all());

        \Auth::user()->articles()->save( $article);

        $this->syncTags($article, $request->input('tag_list'));

        return $article;
    }
	
}
