<?php


namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index() {
        return Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->get();
    }


    public function show($id) {
        return Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id);
    }


    public function getMoviesWithGenres()
    {
        $movies = Movie::with('genres')->get();

        return response()->json($movies);
    }


    public function getMoviesWithRatings()
    {
        $movies = Movie::with(['ratings.reviewer'])->get();

        return response()->json($movies);
    }
}
