<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCskh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cskh', function (Blueprint $table) {
            $table -> string("userid")->primary();
            $table -> string("idlienhe",255);
            $table->timestamps();
            $table->foreign("userid")->references("userid")->on("users");
            $table->foreign("idlienhe")->references("idlienhe")->on("lienhe");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cskh');
    }
}
