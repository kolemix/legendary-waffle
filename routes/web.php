<?php

use Illuminate\Support\Facades\Route;

Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");
Route::get("/qlsach/kinhdien", "App\Http\Controllers\BookController@sachkinhdien");
