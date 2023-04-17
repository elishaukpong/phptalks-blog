<?php

namespace App\Providers;

use App\Services\BlogService;
use App\Services\BlogServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BlogServiceInterface::class, BlogService::class);

//        $this->app->when(BlogService::class)
//            ->needs(BaseInterface::class)
//            ->give(AuthorService);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
