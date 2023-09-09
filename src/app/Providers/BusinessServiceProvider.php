<?php

namespace App\Providers;

use App\Http\Repository\AuthorRepoInterface;
use App\Http\Repository\Impl\AuthorRepo;
use App\Http\Repository\Impl\TagRepo;
use App\Http\Repository\Impl\UserRepo;
use App\Http\Repository\TagRepoInterface;
use App\Http\Repository\UserRepoInterface;
use Illuminate\Support\ServiceProvider;

use App\Http\Repository\GenreRepoInterface;
use App\Http\Repository\Impl\GenreRepo;

class BusinessServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(GenreRepoInterface::class, GenreRepo::class);
        $this->app->bind(AuthorRepoInterface::class, AuthorRepo::class);
        $this->app->bind(TagRepoInterface::class, TagRepo::class);
        $this->app->bind(UserRepoInterface::class, UserRepo::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
