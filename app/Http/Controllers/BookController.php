<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // Lấy tất cả thể loại sách
    function laythongtintheloai()
    {
        $the_loai_sach = DB::table("dm_the_loai")->get();
        return view("qlsach.the_loai", compact("the_loai_sach"));
    }

    // Lấy sách của Nhà xuất bản "Văn Học"
    function laythongtinsach()
    {
        $sach = DB::table("sach")
            ->select("tieu_de", "tac_gia")
            ->where("nha_xuat_ban", "Văn Học")
            ->get();
        return view("qlsach.thong_tin_sach", compact("sach"));
    }

    // Lấy sách thuộc thể loại "Tác phẩm kinh điển"
    function sachkinhdien()
    {
        $sach = DB::table("sach as s")
            ->join("dm_the_loai as t", "s.the_loai", "=", "t.id")
            ->select("s.id", "s.tieu_de", "s.tac_gia", "s.nha_xuat_ban", "s.gia_ban", "s.link_anh_bia")
            ->where("t.ten_the_loai", "Tác phẩm kinh điển")
            ->get();
        return view("qlsach.sach_kinh_dien", compact("sach"));
    }
}
