<?php

namespace App\Http\Controllers;

use App\Http\Repository\AuthorRepoInterface;
use App\Http\Resources\GenreResource;

class AuthorController extends Controller
{
    private AuthorRepoInterface $authorRepo;

    public function __construct(AuthorRepoInterface $authorRepo)
    {
        $this->authorRepo = $authorRepo;
    }
    /**
     * Display a listing of the author.
     */
    public function index()
    {
        $authors = $this->authorRepo->getAuthor();
        return GenreResource::collection($authors)->additional([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
