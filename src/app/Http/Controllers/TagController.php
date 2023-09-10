<?php

namespace App\Http\Controllers;

use App\Http\Repository\TagRepoInterface;
use App\Http\Resources\TagResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @group Tag
 *
 * APIs for managing tags.
 */
class TagController extends Controller
{
    private TagRepoInterface $tagRepo;

    public function __construct(TagRepoInterface $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }
    /**
     * Get all tags
     *
     * @return AnonymousResourceCollection
     * @response {"data":[{"id":1,"name":"Movie"},{"id":2,"name":"Series"}],"success":true,"message":"success"}
     */
    public function index(): AnonymousResourceCollection
    {
        $tags = $this->tagRepo->getTags();
        return TagResource::collection($tags)->additional([
            'success' => true,
            'message' => 'success'
        ]);
    }
}
