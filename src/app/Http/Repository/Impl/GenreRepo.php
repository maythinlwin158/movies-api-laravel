<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\GenreRepoInterface;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;

class GenreRepo implements GenreRepoInterface
{
  public function getGenres(): Collection
  {
    return Genre::all();
  }
}
