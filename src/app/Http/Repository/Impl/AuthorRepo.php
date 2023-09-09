<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\AuthorRepoInterface;
use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;

class AuthorRepo implements AuthorRepoInterface
{
    public function getAuthor(): Collection
    {
        return Author::all();
    }
}
