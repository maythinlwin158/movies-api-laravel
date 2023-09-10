<?php

namespace App\Http\Repository;

interface MovieRepoInterface
{
    public function getMovies();

    public function saveMovie($movie, $tags);

    public function updateMovie($movie, $data, $tags);

    public function deleteMovie($movie);
}
