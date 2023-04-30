<?php

namespace App\Providers;

use App\Http\Controllers\BlogController;
use App\Services\AuthorService;
use App\Services\BlogService;
use App\Services\BlogServiceInterface;
use App\Services\ModelServiceInterface;
use App\Services\TagService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(BlogController::class)
            ->needs(ModelServiceInterface::class)
            ->give(function(){
                return new BlogService(
                    new AuthorService(),
                    new TagService()
                );
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
