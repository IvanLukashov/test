<?php

namespace Test;

use Collective\Html\HtmlServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Register the HtmlServiceProvider class - like you'd generally do in the
        // `config/app.php` 'providers' array.
//        $this->app->register(HtmlServiceProvider::class);
//        $this->app->register('\DaveJamesMiller\BreadCrumbs\ServiceProvider');
//        $loader = AliasLoader::getInstance();
//        $loader->alias('Form', '\Collective\Html\FormFacade');

        // Unrelated
        $this->loadRoutesFrom(__DIR__.'/routes.php');
//        $this->loadMigrationsFrom(__DIR__.'/migrations');
//        $this->loadViewsFrom(__DIR__.'/views', 'blog');

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
