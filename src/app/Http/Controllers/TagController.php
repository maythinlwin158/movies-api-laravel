<?php

namespace App\Http\Controllers;

use App\Http\Repository\AuthorRepoInterface;
use App\Http\Repository\TagRepoInterface;
use App\Http\Resources\GenreResource;

class TagController extends Controller
{
    private TagRepoInterface $tagRepo;

    public function __construct(TagRepoInterface $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = $this->tagRepo->getTags();
        return GenreResource::collection($tags)->additional([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
