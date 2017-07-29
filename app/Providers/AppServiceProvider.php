<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $ide_helper = '\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider';
        if ($this->app->environment() !== 'production' && class_exists($ide_helper)) {
            $this->app->register($ide_helper);
        }
    }
}
