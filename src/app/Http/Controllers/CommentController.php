<?php

namespace App\Http\Controllers;

use App\Http\Repository\CommentRepoInterface;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;

/**
 * @group Comment
 *
 * APIs for managing comments.
 */
class CommentController extends Controller
{
    private CommentRepoInterface $commentRepo;

    public function __construct(CommentRepoInterface $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    /**
     * Store a new comment for a movie.
     *
     * @bodyParam body string required The body of the comment.
     * @bodyParam commenter_email string required email The email of the commenter.
     * @urlParam movie_id integer required The ID of the movie.
     *
     * @return JsonResponse
     * @response {"status":200,"message":"Saved"}
     */
    public function store(StoreCommentRequest $request, Movie $movie): JsonResponse
    {
        $this->commentRepo->saveComment($request->validated(), $movie);

        return response()->json([
            'status' => 200,
            'message' => 'Saved'
        ]);
    }
}
