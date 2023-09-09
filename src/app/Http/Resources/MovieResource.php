<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'summary' => $this->summary,
            'cover_image' => $this->cover_image,
            'genre_id' => $this->genre_id,
            'author_id' => $this->author_id,
            'imdb_rating' => $this->imdb_rating,
            'pdf_link' => $this->pdf_link
        ];
    }
}
