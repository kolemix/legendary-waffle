<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/kinhdien", "App\Http\Controllers\BookController@sachkinhdien");

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