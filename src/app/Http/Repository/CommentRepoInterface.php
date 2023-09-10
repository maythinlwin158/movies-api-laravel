<?php

namespace App\Http\Repository;

interface CommentRepoInterface
{
    public function saveComment($data, $movie);
}
