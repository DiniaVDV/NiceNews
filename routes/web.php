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


Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');
Route::get('/articles',  'ArticlesController@index');
Route::get('/articles/{id}',  'ArticlesController@show');


Route::get('/categories/{name}', 'CategoriesController@showListArticles');
Route::get('/tags/{name}', 'TagsController@showListArticlesByTag');
Route::get('/addComment', 'CommentsController@store');
Route::get('/countLikes', 'CommentsController@countLikes');
Auth::routes();
Route::group(['prefix' => 'admin_panel', 'namespace' => 'Admin'], function()
{
    Route::get('/', 'AdminController@admin');
    Route::get('/categories', 'CategoryController@index')->name('admin_panel.categories');

    Route::get('/category/{id}/edit', 'CategoryController@edit');
    Route::patch('/category/{id}/update', 'CategoryController@update');
    Route::get('/category/{id}/delete', 'CategoryController@destroy');
    Route::get('/category/create', 'CategoryController@create');
    Route::post('/category', 'CategoryController@store');
    Route::get('/navbar/edit', 'NavbarController@edit');
    Route::resource('/articles', 'ArticlesController');
    Route::get('/articles', 'ArticlesController@index')->name('admin_panel.articles');

});

