<?php

namespace App\Http\Controllers;

use App\Http\Repository\MovieRepoInterface;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Storage;

/**
 * @group Movies
 *
 * APIs for managing movies.
 */
class MovieController extends Controller
{
    public function __construct(MovieRepoInterface $movieRepo)
    {
        $this->movieRepo = $movieRepo;
    }

    /**
     * Display the list all movies.
     *
     * @return AnonymousResourceCollection
     * @response {"data":[{"id":27,"title":"Aladin Gone","summary":"This is a aladin movie","cover_image":"https://movies.test/cover_images/iRbAk9ali0zmeAkO5wlm3qr97yv9r4ytL5cROGG4.png","imdb_rating":3,"pdf_link":"/storage/pdfs/aladin-gone_20230910112707.pdf","genre":{"id":1,"name":"Action"},"author":{"id":1,"name":"Greta Gerwig"},"tags":[{"id":1,"name":"Movie"},{"id":2,"name":"Series"},{"id":3,"name":"Ghost Story"}]},{"id":26,"title":"Aladin Return","summary":"This is a aladin movie","cover_image":"https://movies.test/cover_images/pG7Pk1pNKlVH68ryIl1i9iVB2iBPCWsEEuddchHo.png","imdb_rating":3,"pdf_link":null,"genre":{"id":1,"name":"Action"},"author":{"id":1,"name":"Greta Gerwig"},"tags":[{"id":1,"name":"Movie"},{"id":2,"name":"Series"},{"id":3,"name":"Ghost Story"}]},{"id":25,"title":"Aladin","summary":"This is a aladin movie","cover_image":"https://movies.test/cover_images/Cwkp3fIVBnY5cHbeAgDkwnElMggvFLL8JJ0GcMK3.png","imdb_rating":3,"pdf_link":null,"genre":{"id":1,"name":"Action"},"author":{"id":1,"name":"Greta Gerwig"},"tags":[{"id":1,"name":"Movie"},{"id":2,"name":"Series"},{"id":3,"name":"Ghost Story"}]},{"id":4,"title":"The NUN","summary":"This is horror movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":5,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":9,"name":"Horror"},"author":{"id":3,"name":"John"},"tags":[{"id":1,"name":"Movie"},{"id":3,"name":"Ghost Story"}]},{"id":5,"title":"The Flash","summary":"Time travel movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"}]},{"id":6,"title":"Meg 2: The Trench","summary":"Meg 2: The Trench movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":3,"name":"Comedy"},"author":{"id":3,"name":"John"},"tags":[{"id":1,"name":"Movie"}]},{"id":7,"title":"Blue Beetle","summary":"This is Blue Beetle movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"},{"id":5,"name":"Thriller"}]},{"id":8,"title":"No Hard Feelings","summary":"This is No Hard Feelings movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":5,"name":"Drama"},"author":{"id":2,"name":"Marry"},"tags":[{"id":1,"name":"Movie"},{"id":4,"name":"Cartoon"}]},{"id":9,"title":"Spider-Man: Across the Spider-Verse","summary":"Spider-Man: Across the Spider-Verse movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"},{"id":5,"name":"Thriller"}]},{"id":10,"title":"Mission: Impossible - Dead Reckoning Part One","summary":"This is Mission: Impossible - Dead Reckoning Part One movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":1,"name":"Action"},"author":{"id":1,"name":"Greta Gerwig"},"tags":[{"id":1,"name":"Movie"},{"id":5,"name":"Thriller"}]}],"links":{"first":"https://movies.test/api/movies?page=1","last":"https://movies.test/api/movies?page=3","prev":null,"next":"https://movies.test/api/movies?page=2"},"meta":{"current_page":1,"from":1,"last_page":3,"links":[{"url":null,"label":"&laquo; Previous","active":false},{"url":"https://movies.test/api/movies?page=1","label":"1","active":true},{"url":"https://movies.test/api/movies?page=2","label":"2","active":false},{"url":"https://movies.test/api/movies?page=3","label":"3","active":false},{"url":"https://movies.test/api/movies?page=2","label":"Next &raquo;","active":false}],"path":"https://movies.test/api/movies","per_page":10,"to":10,"total":27},"status":200,"message":"success"}
     */
    public function index(): AnonymousResourceCollection
    {
        $movies = $this->movieRepo->getMovies();

        return MovieResource::collection($movies)->additional([
            'status' => 200,
            'message' => 'success'
        ]);
    }

    /**
     * Store a newly created movie into db, save cover_img into cover image folder and create PDF by Queue Job.
     *
     * @bodyParam title string required The title of the movie.
     * @bodyParam summary string required The summary of the movie.
     * @bodyParam genre_id integer required The genre_id of the movie.
     * @bodyParam author_id integer required The author_id of the movie.
     * @bodyParam imdb_rating integer required The imdb_rating of the movie.
     * @bodyParam cover_image file required The cover_image of the movie.
     * @bodyParam tag_ids integer[] required The tag_ids of the movie.
     *
     * @return JsonResponse
     * @response {"status":200,"message":"Saved"}
     * @authenticated
     */
    public function store(StoreMovieRequest $request)
    {
        $movie = array_merge($request->only([
            'title',
            'summary',
            'genre_id',
            'author_id',
            'imdb_rating',
            'pdf_link'
        ]), [
            'user_id' => auth()->user()->id
        ]);

        if ($request->hasFile('cover_image')) {
            $movie['cover_image'] = $request->file('cover_image')->store('cover_images', 'public');
        }

        $this->movieRepo->saveMovie($movie, $request->input('tag_ids'));

        return response()->json([
            'status' => 200,
            'message' => 'Saved'
        ]);
    }

    /**
     * Display the movie detail.
     *
     *
     * @return JsonResponse
     * @response {"status":200,"message":"Saved","data":{"id":2,"title":"Batman Begins","summary":"This is a superhero movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":5,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":1,"name":"Movie"},{"id":5,"name":"Thriller"}],"comments":[]},"related_movies":[{"id":3,"title":"The Dark Night","summary":"This is a superhero movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":5,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":1,"name":"Movie"},{"id":5,"name":"Thriller"}]},{"id":4,"title":"The NUN","summary":"This is horror movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":5,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":9,"name":"Horror"},"author":{"id":3,"name":"John"},"tags":[{"id":1,"name":"Movie"},{"id":3,"name":"Ghost Story"}]},{"id":1,"title":"Barbie","summary":"Barbie suffers a crisis that leads her to question her world and her existence.","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":4,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":6,"name":"Fantasy"},"author":{"id":2,"name":"Marry"},"tags":[{"id":1,"name":"Movie"},{"id":4,"name":"Cartoon"}]},{"id":5,"title":"The Flash","summary":"Time travel movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"}]},{"id":7,"title":"Blue Beetle","summary":"This is Blue Beetle movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"},{"id":5,"name":"Thriller"}]},{"id":9,"title":"Spider-Man: Across the Spider-Verse","summary":"Spider-Man: Across the Spider-Verse movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"},{"id":5,"name":"Thriller"}]},{"id":12,"title":"Transformers: Rise of the Beasts","summary":"Transformers: Rise of the Beasts movie","cover_image":"https://movies.test/cover_images/I9LkyHG5vU2uJOelthzmXJn1cfqiyeEQNwFhnjrK.png","imdb_rating":3,"pdf_link":"https://movies.test/pdf_links/1.pdf","genre":{"id":2,"name":"Superhero"},"author":{"id":5,"name":"Stan Lee"},"tags":[{"id":2,"name":"Series"},{"id":5,"name":"Thriller"}]}]}
     */
    public function show(Movie $movie)
    {
        $movie->load(['genre', 'author', 'tags', 'comments']);
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => new MovieResource($movie),
            'related_movies' => MovieResource::collection($this->movieRepo->getRelatedMovies($movie))
        ]);
    }

    /**
     * Update the movie in db, delete and new create cover_img into cover image folder and update PDF by Queue Job.
     *
     * @urlParam movie_id integer required The ID of the movie.
     * @bodyParam title string required The title of the movie.
     * @bodyParam summary string required The summary of the movie.
     * @bodyParam genre_id integer required The genre_id of the movie.
     * @bodyParam author_id integer required The author_id of the movie.
     * @bodyParam imdb_rating integer required The imdb_rating of the movie.
     * @bodyParam cover_image file required The cover_image of the movie.
     * @bodyParam tag_ids integer[] required The tag_ids of the movie.
     *
     * @return JsonResponse
     * @response {"status":200,"message":"Saved"}
     * @authenticated
     */
    public function update(UpdateMovieRequest $request, Movie $movie): JsonResponse
    {
        if ($request->hasFile('cover_image')) {
            $this->deleteFile($movie->cover_image);
            $cover_image = $request->file('cover_image')->store('cover_images', 'public');
        }

        $data = array_merge($request->only([
            'title',
            'summary',
            'genre_id',
            'author_id',
            'imdb_rating',
            'pdf_link'
        ]), [
            'cover_image' => $cover_image ?? $movie->cover_image
        ]);

        $this->movieRepo->updateMovie($movie, $data, $request->input('tag_ids'));

        return response()->json([
            'status' => 200,
            'message' => 'Saved'
        ]);
    }

    /**
     * Remove the movie from db, delete cover_img from cover image folder and delete PDF by Queue Job.
     *
     * @urlParam movie_id integer required The ID of the movie.
     *
     * @return JsonResponse
     * @response {"status":200,"message":"Deleted"}
     * @authenticated
     */
    public function destroy(Movie $movie)
    {
        $this->deleteFile($movie->cover_image);
        $this->deleteFile($movie->pdf_link);
        $this->movieRepo->deleteMovie($movie);

        return response()->json([
            'status' => 200,
            'message' => 'Deleted'
        ]);
    }

    private function deleteFile(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
