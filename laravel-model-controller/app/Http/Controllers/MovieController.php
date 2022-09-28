<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function list() {
        $movies = Movie::all();
        return view('movie-list', compact('movies'));
    }
}
