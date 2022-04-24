<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductCategoryService;

class ProductCategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductCategoryService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
