<?php

namespace App\Http\Controllers;

use App\Http\Repository\GenreRepoInterface;
use App\Http\Resources\GenreResource;

class GenreController extends Controller
{
    private GenreRepoInterface $genreRepo;

    public function __construct(GenreRepoInterface $genreRepo)
    {
        $this->genreRepo = $genreRepo;
    }
    /**
     * Display a listing of the genre.
     */
    public function index()
    {
        $genres = $this->genreRepo->getGenres();
        return GenreResource::collection($genres)->additional([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
