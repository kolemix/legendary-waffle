<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MovieController extends Controller
{
    public function genres() {
    $data = DB::table('genre')->get();
    return view('genres', compact('data'));
}
}
