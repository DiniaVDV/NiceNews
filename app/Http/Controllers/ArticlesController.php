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

    protected $dates = ['dob'];
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

    public function show($id)
    {

        $article = Article::findOrFail($id);
		$catedArticle = Article::checkArticleOnSpec($article);
		$comments = $article->comments()->orderBy('created_at', "desc")->paginate(5);
		$users = User::usersForComments($comments);
		$categoryName = Category::where('id', $article->category_id)->get();
		return view('articles.show', compact('article', 'catedArticle', 'comments', 'users', 'categoryName'));
    }


    /**
     * Show the page to create a new Article
     *
     * @return Response
     */

    public function create()
    {
        $tags = Tag::getTagsId();
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

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {


        if (Gate::denies('edit-article', $article)) {
            abort(403, 'Unauthorized action.');
        }
        // $article = Article::findOrFail($id);
        $tags = Tag::getTagsId();
        return view('articles.edit', compact('article', 'tags'));

    }

    /**
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Article $article, ArticleRequest $request)
    {
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
     *
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

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function find(Request $request)
    {
       $result = $request->all();
       $tagList = isset($result['tag_list']) ? $result['tag_list'] : null;
       $categoriesId = isset($result['category_id']) ? $result['category_id'] : null;
       $date = isset($result['datepicker1']) ? $result['datepicker1'] : null;

       $articles = array();
       $articleTags = array();
       $articlesCategory = array();
       $articleDate = array();
       if(!empty($categoriesId)){
           foreach ($categoriesId as $categoryId){
               $articlesCategory[] = Category::findOrFail($categoryId)->articles()->get();
           }
       }

       if(!empty($articlesCategory)){
           if(!empty($tagList)){
               foreach($tagList as $tagId){
                   foreach ($articlesCategory as $articleCategory) {
                       foreach ($articleCategory as $article) {
                           $tags = $article->tags()->get();
                           foreach ($tags as $tag) {
                               if ($tagId == $tag->id) {
                                   if (!empty($date)) {
                                       if ($article->published_at->format('m/d/Y') == $date) {
                                           $articles[] = $article;
                                           dd($tag->id);
                                       }
                                   }else{
                                       $articles[] = $article;
                                   }
                               }
                           }
                       }
                   }
               }
           }else{
               foreach ($articlesCategory as $articleCategory){
                   foreach ($articleCategory as $article) {
                       if (!empty($date)) {
                           if ($article->published_at->format('m/d/Y') == $date) {
                               $articles[] = $article;
                           }
                       }else{
                           $articles[] = $article;
                       }
                   }
               }
           }
       }else{
           if(!empty($tagList)){
               foreach ($tagList as $tagId){
                    $articleTags = Tag::findOrFail($tagId)->articles()->get();
                    foreach ($articleTags as $article){
                        if (!empty($date)) {
                            if ($article->published_at->format('m/d/Y') == $date) {
                                $articles[] = $article;
                            }
                        }else{
                            $articles[] = $article;
                        }
                    }
               }

           }else{
               if(!empty($date)) {
                   $allArticles = Article::all();
                   foreach ($allArticles as $article) {
                       if($article->published_at->format('m/d/Y') == $date){
                           $articles[] = $article;
                       }
                   }
               }
           }
       }

       return view('pages.found', compact('articles'));
    }
}
