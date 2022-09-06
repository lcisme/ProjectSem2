<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGiave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giave', function (Blueprint $table) {
            $table -> string("idgiave")->primary();
            $table -> string("idchuyenbay",255);
            $table -> string("vethuong",255);
            $table -> string("vevip",255);
            $table->timestamps();
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
        Schema::dropIfExists('giave');
    }
}
