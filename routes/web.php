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


Route::get('/profile/{id}', 'UserController@profile');
Route::get('/user/{id}/comments', 'UserController@showComments');

Route::get('/articles',  'ArticlesController@index');
Route::get('/articles/{id}',  'ArticlesController@show');
//Route::resource('/articles', 'ArticlesController');

Route::get('/categories/{name}', 'CategoriesController@showListArticles');
Route::get('/user/{id}/comments/', 'UserController@showComments');
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
    Route::resource('/articles', 'ArticlesController');
    Route::get('/articles/{id}/delete', 'ArticlesController@destroy');
    Route::get('/articles', 'ArticlesController@index')->name('admin_panel.articles');

    Route::resource('/adverts', 'AdvertsController');
    Route::get('/adverts/{id}/delete', 'AdvertsController@destroy');

    Route::resource('/dropdown', 'DropdownController');
    Route::get('/dropdown', 'DropdownController@index')->name('admin_panel.dropdown');
    Route::get('/dropdown/{id}/delete', 'DropdownController@destroy');

    Route::get('/color_background', 'AdminController@changeBackgroundBody');
    Route::post('/color_background', 'AdminController@applyBackgroundBody');
});

