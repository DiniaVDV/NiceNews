<?php

namespace App\Http\Controllers\Admin;

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
        $articles = Article::paginate(10);
        $categories = Article::getCategories($articles);
        $users = Article::getUsers($articles);
        return view('admin.articles.show', compact('articles', 'categories', 'users'));
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
		return view('admin.articles.show', compact('article', 'catedArticle', 'comments', 'users', 'categoryName'));
    }

    /**
     * Show the page to create a new Article
     *
     * @return Response
     */

    public function create()
    {
        $tags = Tag::pluck('name', 'id');
        return view('admin.articles.create', compact('tags'));
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
        $categories = Category::pluck('title', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.articles.edit', compact('article', 'tags', 'users', 'categories'));

    }

    public function update(Article $article, ArticleRequest $request)
    {
        if($request->hasFile('img')){
            $request->file('img')->move(public_path('img/articlesPhoto'), $request->file('img')->getClientOriginalName());
            $data = $request->except(['img']);
            $data['img'] = $request->file('img')->getClientOriginalName();
        }
        $article->update($data);
        $article->save();

        $this->syncTags($article, $request->input('tag_list'));
        return redirect()->route('admin_panel.articles')->with('message', 'Статья создана.');

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
