<?php

namespace App\Providers;

use App\Http\Repository\AuthorRepoInterface;
use App\Http\Repository\CommentRepoInterface;
use App\Http\Repository\Impl\AuthorRepo;
use App\Http\Repository\Impl\CommentRepo;
use App\Http\Repository\Impl\MovieRepo;
use App\Http\Repository\Impl\TagRepo;
use App\Http\Repository\Impl\UserRepo;
use App\Http\Repository\MovieRepoInterface;
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
        $this->app->bind(MovieRepoInterface::class, MovieRepo::class);
        $this->app->bind(CommentRepoInterface::class, CommentRepo::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
