<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giave extends Model
{
    use HasFactory;
    protected $table = 'giave' ;
    protected $primaryKey = 'idgiave' ;
    protected $keyType='string';
    protected $fillable = [
        "idchuyenbay",
        "vethuong",
        "vevip",
        "created_at",
        "updated_at"
    ];
    public  function  scopeChuyenbay($query,$idchuyenbay=''){
        if($idchuyenbay != null && $idchuyenbay != ''){
            return $query->where("idchuyenbay","like","%".$idchuyenbay."%");
        }
        return $query;
    }

}
