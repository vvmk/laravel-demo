<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     *
     * After all services have been registered.
     */
    public function boot()
    {
        // Register a composer where the first argument is the name of the view being loaded.
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', \App\Post::archives());
            $view->with('tags', \App\Tag::pluck('name'));
        });
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
