<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CategoriesController@indexCat');


Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');
Route::get('articles/create', ['middleware' => 'auth', 'uses' => 'ArticlesController@create']);
Route::resource('articles', 'ArticlesController');

Route::get('categories/{name}', 'CategoriesController@showListArticles');
Route::get('tags/{name}', 'TagsController@showListArticlesByTag');
Route::post('articles/{id}', 'CommentsController@addComment');
Auth::routes();

Route::get('/admin_panel', 'AdminController@admin');
