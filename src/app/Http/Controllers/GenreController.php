<?php

namespace App\Http\Controllers;

use App\Http\Repository\GenreRepoInterface;
use App\Http\Resources\GenreResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Genre
 *
 * APIs for managing genres.
 */
class GenreController extends Controller
{
    private GenreRepoInterface $genreRepo;

    public function __construct(GenreRepoInterface $genreRepo)
    {
        $this->genreRepo = $genreRepo;
    }

    /**
     * Get all genres
     *
     * @return AnonymousResourceCollection
     * @response {"data":[{"id":1,"name":"Action"},{"id":2,"name":"Superhero"}],"success":true,"message":"success"}
     */
    public function index(): AnonymousResourceCollection
    {
        $genres = $this->genreRepo->getGenres();
        return GenreResource::collection($genres)->additional([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
