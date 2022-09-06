<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSanbay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanbay', function (Blueprint $table) {
            $table -> string("idsanbay")->primary();
            $table -> string("tensanbay",255);
            $table -> string("masanbay",255);
            $table -> string("thanhpho",255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanbay');
    }
}
