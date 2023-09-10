<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Barbie',
                'summary' => 'Barbie suffers a crisis that leads her to question her world and her existence.',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 4,
                "genre_id" => 6,
                "author_id" => 2,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 4],
                "user_id" => 1
            ],
            [
                'title' => 'Batman Begins',
                'summary' => 'This is a superhero movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 5,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'The Dark Night',
                'summary' => 'This is a superhero movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 5,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'The NUN',
                'summary' => 'This is horror movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 5,
                "genre_id" => 9,
                "author_id" => 3,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 3],
                "user_id" => 1
            ],
            [
                'title' => 'The Flash',
                'summary' => 'Time travel movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [2],
                "user_id" => 1
            ],
            [
                'title' => 'Meg 2: The Trench',
                'summary' => 'Meg 2: The Trench movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 3,
                "author_id" => 3,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1],
                "user_id" => 1
            ],
            [
                'title' => 'Blue Beetle',
                'summary' => 'This is Blue Beetle movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [2, 5],
                "user_id" => 1
            ],
            [
                'title' => 'No Hard Feelings',
                'summary' => 'This is No Hard Feelings movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 5,
                "author_id" => 2,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 4],
                "user_id" => 1
            ],
            [
                'title' => 'Spider-Man: Across the Spider-Verse',
                'summary' => 'Spider-Man: Across the Spider-Verse movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [2, 5],
                "user_id" => 1
            ],
            [
                'title' => 'Mission: Impossible - Dead Reckoning Part One',
                'summary' => 'This is Mission: Impossible - Dead Reckoning Part One movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 1,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'John Wick: Chapter 4',
                'summary' => 'John Wick: Chapter 4 movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 1,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'Transformers: Rise of the Beasts',
                'summary' => 'Transformers: Rise of the Beasts movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [2, 5],
                "user_id" => 1
            ],
            [
                'title' => 'The Godfather',
                'summary' => 'The Godfather movie summary text',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 8,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 3],
                "user_id" => 1
            ],
            [
                'title' => 'The Nun II',
                'summary' => 'Horror Movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 9,
                "author_id" => 3,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 3],
                "user_id" => 1
            ],
            [
                'title' => 'The Little Mermaid',
                'summary' => 'The Little Mermaid movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 6,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 4],
                "user_id" => 1
            ],
            [
                'title' => 'The Place Beyond the Pines',
                'summary' => 'The Place Beyond the Pines Movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 5,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 4],
                "user_id" => 1
            ],
            [
                'title' => 'Haunted Mansion',
                'summary' => 'Haunted Mansion movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 9,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'M3GAN',
                'summary' => 'This is M3GAN movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 9,
                "author_id" => 3,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 3],
                "user_id" => 1
            ],
            [
                'title' => 'The Wolf of Wall Street',
                'summary' => 'The Wolf of Wall Street movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 4,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 4],
                "user_id" => 1
            ],
            [
                'title' => 'Titanic',
                'summary' => 'Titanic movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 5,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1],
                "user_id" => 1
            ],
            [
                'title' => 'Once Upon a Time in Hollywood',
                'summary' => 'Once Upon a Time in Hollywood movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 5,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'Spider-Man: Lotus',
                'summary' => 'Spider-Man: Lotus movie',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 2,
                "author_id" => 5,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'The Monkey King',
                'summary' => 'Shawshank summary text',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 7,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
            [
                'title' => 'The Shawshank 2',
                'summary' => 'This is summary text',
                "cover_image" => "cover_images/q5plrM7nioGGbULELt1tJo1DG3oujYfGyTJ6jBJP.png",
                "imdb_rating" => 3,
                "genre_id" => 8,
                "author_id" => 1,
                "pdf_link" => "http://localhost/storage/pdfs/littel-m-a-r-m-a-i-d_20230910183958.pdf",
                "tags" => [1, 5],
                "user_id" => 1
            ],
        ];

        foreach ($movies as $movieData) {

            $tags = $movieData['tags'];
            unset($movieData['tags']);

            $movie = Movie::create($movieData);
            $movie->tags()->sync($tags);
        }
    }
}
