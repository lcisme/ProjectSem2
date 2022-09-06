<?php

namespace App\Http\Controllers;

use App\Models\Sanbay;
use App\Models\Chuyenbay;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("usersPage\index");
    }
    public function about(){
        return view("usersPage\about");
    }
    public function blog(){
        return view("usersPage\blog");
    }
    public function blogDetail(){
        return view("usersPage\blog-detail");
    }
    public function book(){
        return view("usersPage\book");
    }

//    public function listChuyenbay(Request  $request){
//        $paratenchuyenbay = $request->get("tenchuyenbay");
//        $chuyenbay = Chuyenbay::Tenchuyenbay($paratenchuyenbay)
//            ->with("maybay")
////            ->with("sanbay1")->with("sanbay2")
//            ->simplePaginate(10);
//        return view ("usersPage.index",[
//            "chuyenbay"=>$chuyenbay
//        ]);
//    }
    public function  listChuyenbay(Request  $request){
        $sanbay = Sanbay::all();
        $sanbaydi = $request->get('sanbaydi');
        $sanbayden = $request->get('sanbayden');
        $ngaydi = $request->get('ngaydi');
        $ngayden = $request->get('ngayden');
        $trangthai = $request->get('trangthai');
        $chuyenbay = Chuyenbay::Sanbaydi($sanbaydi)
            ->Sanbayden($sanbayden)
            ->Ngaydi($ngaydi)
            ->Ngayden($ngayden)
            ->Trangthai($trangthai)
            ->with("maybay")
            ->simplePaginate(10);

        return view ("usersPage.index",[
            "chuyenbay" => $chuyenbay,
            "sanbay" => $sanbay
        ]);
    }
    public function checkinOnline(){
        return view("usersPage\check-in-online");
    }
    public function contact(){
        return view("usersPage\contact");
    }
    public function login(){
        return view("usersPage\login");
    }
    public function payment(){
        return view("usersPage\payment");
    }
    public function promotion(){
        return view("usersPage\promotion");
    }
    public function register(){
        return view("usersPage.register");
    }
}
