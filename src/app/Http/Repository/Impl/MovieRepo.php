<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\MovieRepoInterface;
use App\Jobs\GenerateMoviePdf;
use App\Models\Movie;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MovieRepo implements MovieRepoInterface
{
    public function getMovies(): LengthAwarePaginator
    {
        return Movie::with(['author', 'genre', 'tags'])->latest()->paginate(10);
    }

    public function saveMovie($movie, $tags)
    {
        try {
            DB::beginTransaction();
            $movie = Movie::create($movie);
            $movie->tags()->sync($tags);
            DB::commit();

            GenerateMoviePdf::dispatch($movie);

            return $movie;
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Movie transaction failed: ' . $e->getMessage());
        }
    }

    public function updateMovie($movie, $data, $tags)
    {
        try {
            DB::beginTransaction();
            $movie->update($data);
            $movie->tags()->sync($tags);

            GenerateMoviePdf::dispatch($movie);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Movie transaction failed: ' . $e->getMessage());
        }
    }

    public function deleteMovie($movie)
    {
        try {
            DB::beginTransaction();
            $movie->tags()->detach();
            $movie->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Movie transaction failed: ' . $e->getMessage());
        }
    }

    public function getRelatedMovies($movie): Collection
    {
        return Movie::with(['author', 'genre', 'tags'])
            ->where('id', '!=', $movie->id)
            ->where(function ($query) use ($movie) {
                $query->orWhere('author_id', $movie->author_id);
                $query->orWhere('genre_id', $movie->genre_id);
                $query->orWhereBetween('imdb_rating', [$movie->imdb_rating - 1, $movie->imdb_rating + 1]);
            })
            ->whereHas('tags', function ($query) use ($movie) {
                $query->orWhereIn('tags.id', $movie->tags->pluck('id'));
            })
            ->orderByDesc('imdb_rating')
            ->take(7)
            ->get();
    }
}
