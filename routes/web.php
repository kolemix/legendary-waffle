<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doanphucgiakhanh', function () {
    return 'Doan Phuc Gia Khanh';
});
Route::get('/nguyentuandung', function () {
    return 'Nguyen Tuan Dung';
});
Route::get('/sach', function () {
    $sach = DB::table('sach')->get();
    $theloai = DB::table('dm_the_loai')->get();
    return view('danh_sach_sach', compact('sach', 'theloai'));
});

Route::get('/theloai/{id}', function ($id) {
    $sach = DB::table('sach')->where('the_loai', $id)->get();
    $theloai = DB::table('dm_the_loai')->get();
    $tentheloai = DB::table('dm_the_loai')->where('id', $id)->first();
    return view('danh_sach_sach', compact('sach', 'theloai', 'tentheloai'));
});