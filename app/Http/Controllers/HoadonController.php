<?php

namespace App\Http\Controllers;

use App\Models\Chuyenbay;
use App\Models\Hoadon;
use App\Models\User;
use Illuminate\Http\Request;

class HoadonController extends Controller
{
    public function all(Request  $request){
        $users = User::all();
        $chuyenbay = Chuyenbay::all();
        $paraID = $request->get("idkh");
        $hoadon= Hoadon::ID($paraID)->simplePaginate(10);
        return view ("admin.hoadon.list-hoadon",[
            "hoadon"=>$hoadon,
            "users"=>$users,
            "chuyenbay"=>$chuyenbay
        ]);
    }
    public function form(){
        $users = User::all();
        $chuyenbay = Chuyenbay::all();
        return view("admin.hoadon.add-hoadon",[
            "users" =>$users,
            "chuyenbay"=>$chuyenbay
        ]);

    }

    public function create(Request  $request){
        $request ->validate([
            'idkh'=>'required|string',
            'idchuyenbay' => 'required',
            'ngaydatve' => 'required',
            'trangthai' => 'required',
            'ghethuong' => 'required',
            'ghevip'=>'required',
            'tongtien' => 'required',

        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        Hoadon::create([
            "idkh"=>$request->get("idkh"),
            "idchuyenbay"=>$request->get("idchuyenbay"),
            "ngaydatve"=>$request->get("ngaydatve"),
            "trangthai"=>$request->get("trangthai"),
            "ghethuong"=>$request->get("ghethuong"),
            'ghevip' => $request->get("ghevip"),
            'tongtien' => $request->get("tongtien"),
        ]);
        return redirect()->to("/hoadon/list");
    }
    public function edit($id){
        $hoadon = Hoadon::find($id);
        return view('admin.hoadon.edit-hoadon',[
            'hoadon'=> $hoadon
        ]);
    }
    public  function update(Request $request, $id){
        $hoadon = Hoadon::find($id);
        $hoadon -> update([
            "trangthai"=>$request->get("trangthai"),
        ]);
        return redirect()->to("/hoadon/list")->with("success","Cập nhật hóa đơn thành công");
    }
    public function delete($id){
        try {
            $hoadon = Hoadon::find($id);
            $hoadon->delete();
            return redirect()->to("/hoadon/list")->with("success","Xóa hóa đơn thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }



    }
}
