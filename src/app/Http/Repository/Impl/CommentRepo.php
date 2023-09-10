<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\CommentRepoInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CommentRepo implements CommentRepoInterface
{
    public function saveComment($data, $movie)
    {
        try {
            DB::beginTransaction();
            $comment = $movie->comments()->create($data);
            DB::commit();
            return $comment;
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Comment transaction failed: ' . $e->getMessage());
        }
    }
}
