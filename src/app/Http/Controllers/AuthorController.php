<?php

namespace App\Http\Controllers;

use App\Http\Repository\AuthorRepoInterface;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Author
 *
 * APIs for managing authors.
 */
class AuthorController extends Controller
{
    private AuthorRepoInterface $authorRepo;

    public function __construct(AuthorRepoInterface $authorRepo)
    {
        $this->authorRepo = $authorRepo;
    }

    /**
     * Get all authors
     *
     * @return AnonymousResourceCollection
     * @response {"data":[{"id":1,"name":"Greta Gerwig"},{"id":2,"name":"Marry"}],"success":true,"message":"success"}
     */
    public function index(): AnonymousResourceCollection
    {
        $authors = $this->authorRepo->getAuthors();
        return AuthorResource::collection($authors)->additional([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
