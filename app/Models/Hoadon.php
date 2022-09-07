<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $table = 'hoadon' ;
    protected $primaryKey = 'id' ;
    protected $keyType='string';
    protected $fillable = [
        "idkh",
        "idchuyenbay",
        "ngaydatve",
        "trangthai",
        "ghethuong",
        "ghevip",
        "tongtien",
       "created_at",
        "updated_at"
    ];
    public  function  scopeID($query,$ID=''){
        if($ID != null && $ID != ''){
            return $query->where("idkh","like","%".$ID."%");
        }
        return $query;
    }

    public function users(){
        return $this->belongsTo(User::class,'idkh','sdt');
    }

    public function sanbay1(){
        return $this->belongsTo(Sanbay::class,"sanbaydi","idsanbay");
    }

    public function sanbay2(){
        return $this->belongsTo(Sanbay::class,"sanbayden","idsanbay");
    }

    public function chuyenbay(){
        return $this->belongsTo(Chuyenbay::class,"idchuyenbay","idchuyenbay");
    }


}
