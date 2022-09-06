<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table -> string("billid")->primary();
            $table -> string("userid");
            $table -> string("idchuyenbay");
            $table -> date("ngaydatve");
            $table -> string("trangthai",255);
            $table -> decimal("tongtien",45);
            $table -> string("vitringoi",255);
            $table -> decimal("giamgia",45);
            $table->timestamps();
            $table->foreign("userid")->references("userid")->on("users");
            $table->foreign("idchuyenbay")->references("idchuyenbay")->on("chuyenbay");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
