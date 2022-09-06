<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMaybay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maybay', function (Blueprint $table) {
            $table -> string("idmaybay")->primary();
            $table -> string("hangmaybay",255);
            $table -> string("tenmaybay",255);
            $table -> string("ghethuong",255);
            $table -> string("ghevip",255);
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
        Schema::dropIfExists('maybay');
    }
}
