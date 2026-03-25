<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/sach/{id}', function ($id) {
    $sach = DB::table('sach')->where('id', $id)->first();
    return view('chi_tiet_sach', compact('sach'));
});