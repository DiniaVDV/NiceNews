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

Route::get('/', 'ArticlesController@indexCat');


Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('categories/{name}', 'ArticlesController@showListArticles');
Route::get('tags/{name}', 'ArticlesController@showListArticlesByTag');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin_panel', 'PagesController@admin');
