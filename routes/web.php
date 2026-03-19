<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/top-runtime', function () {
    $movies = DB::table('movie')->where('runtime', '>', 120)->limit(10)->get();
    return view('top_runtime', compact('movies'));

Route::get('/top-vote', function () {
    $movies = DB::table('movie')->orderByDesc('vote_average')->limit(10)->get();
    return view('top_vote', compact('movies'));

});

Route::get('/phannguyenkhoinguyen', function () {
    return "Phan Nguyễn Khôi Nguyên";
});

Route::get('/doanphucgiakhanh', function () {
    return 'Doan Phuc Gia Khanh';
});


Route::get('/phuchibang', function () {
    return "Phu Chi Bang";
});

Route::get('/nguyentuandung', function () {
    return "Nguyen Tuan Dung";
});


Route::get('/top-movies', [MovieController::class, 'topMovies']);
Route::get('/genres', [App\Http\Controllers\MovieController::class, 'genres']);

