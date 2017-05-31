<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
		View::share('categories', \App\Category::listOfCategories());
		View::share('adverts', \App\Advert::getAdverts());
		View::share('navbar', \App\Navbar::all());
		View::share('lastArticles', \App\Article::getLastThreeArticles());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
