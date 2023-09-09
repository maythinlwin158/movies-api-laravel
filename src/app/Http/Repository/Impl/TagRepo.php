<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\TagRepoInterface;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class TagRepo implements TagRepoInterface
{
    public function getTags(): Collection
    {
        return Tag::all();
    }
}
