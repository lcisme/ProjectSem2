<?php

namespace App\Http\Controllers;

use App\Models\Chamsockhachhang;
use App\Models\Lienhe;
use App\Models\User;
use Illuminate\Http\Request;

class ChamsockhachhangController extends Controller
{
    public function all(Request  $request){
        $paraUSER = $request->get("iduser");
        $paraLIENHE = $request->get("idlienhe");
        $chamsockhachhang= Chamsockhachhang::IDUSER($paraUSER)->IDLIENHE($paraLIENHE)->simplePaginate(10);
        return view ("admin.chamsockhachhang.list-chamsockhachhang",[
            "chamsockhachhang"=>$chamsockhachhang,

        ]);
    }
    public function form(){
        $users = User::all();
        $lienhe = Lienhe::all();
        $chamsockhachhang = Chamsockhachhang::all();
        return view("admin.chamsockhachhang.add-chamsockhachhang",[
            "chamsockhachhang"=>$chamsockhachhang,
            "users"=>$users,
            "lienhe"=>$lienhe
        ]);

    }
    public function create(Request  $request){
        $request ->validate([
            'iduser'=>'required',
            'idlienhe' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        Chamsockhachhang::create([
            "iduser"=>$request->get("iduser"),
            "idlienhe"=>$request->get("idlienhe"),
        ]);
        return redirect()->to("/chamsockhachhang/list");
    }
    public function edit($iduser){
        $chamsockhachhang = Chamsockhachhang::find($iduser);
        return view('admin.chamsockhachhang.edit-chamsockhachhang',[
            'chamsockhachhang'=> $chamsockhachhang
        ]);
    }
    public function update(Request $request, $iduser ){
        $chamsockhachhang = Chamsockhachhang::find($iduser);
        $chamsockhachhang -> update([
            "iduser"=>$request->get("iduser"),
            "idlienhe"=>$request->get("idlienhe"),
        ]);
        return redirect()->to("/chamsockhachhang/list")->with("success","Cập nhật thành công");
    }

    public function delete($iduser){
        try {
            $chamsockhachhang = Chamsockhachhang::find($iduser);
            $chamsockhachhang->delete();
            return redirect()->to("/chamsockhachhang/list")->with("success","Xóa thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }
    }
}
