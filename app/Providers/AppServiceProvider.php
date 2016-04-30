<?php

namespace App\Providers;

use App\Repositories\ProductsCategoriesRepository;
use App\Repositories\ProductsCategoriesRepositoryEloquent;
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
        $this->app->bind(
            ProductsCategoriesRepository::class,
            ProductsCategoriesRepositoryEloquent::class
        );
    }
}
