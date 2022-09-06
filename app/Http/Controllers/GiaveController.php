<?php

namespace App\Http\Controllers;

use App\Models\Giave;
use Illuminate\Http\Request;

class GiaveController extends Controller
{
    //
    public function all(Request  $request){
        $paraidchuyenbay = $request->get("idchuyenbay");
        $giave = Giave::Chuyenbay($paraidchuyenbay)->simplePaginate(10);
        return view ("admin.giave.list-giave",[
            "giave" => $giave
        ]);
    }
    public function form(){
        return view("admin.giave.add-giave");
    }
    public function create(Request $request){
        $request ->validate([
            'idchuyenbay' => 'required',
            'vethuong' => 'required',
            'vevip' => 'required',
        ],[
            'required'=>"Vui lòng nhập thông tin"
        ]);
        Sanbay::create([
            "idchuyenbay"=>$request->get("idchuyenbay"),
            "vethuong"=>$request->get("vethuong"),
            "vevip"=>$request->get("vevip"),
        ]);
        return redirect()->to("/giave/list");

    }
    public function edit($idgiave){
        $giave = Giave::find($idgiave);
        return view('admin.giave.edit-giave',[
            'giave'=> $giave
        ]);
    }
    public function update(Request  $request,$idgiave){
        $giave = Giave::find($idgiave);
        $giave -> update([
            "idchuyenbay"=>$request->get("idchuyenbay"),
            "vethuong"=>$request->get("vethuong"),
            "vevip"=>$request->get("vevip"),
        ]);
        return redirect()->to("/giave/list")->with("success","Cập nhật giá vé thành công");
    }
    public function delete($idgiave){
        try {
            $giave = Giave::find($idgiave);
            $giave->delete();
            return redirect()->to("/giave/list")->with("success","Xóa giá vé thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error","Không thể xóa");
        }

    }
}
