<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function topMovies()
{
    $movies = Movie::orderBy('budget', 'desc')
                    ->take(10)
                    ->get();

    return view('top_movies', compact('movies'));


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MovieController extends Controller
{
    public function genres() {
    $data = DB::table('genre')->get();
    return view('genres', compact('data'));

}
}
