<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> string("userid")->primary();
            $table -> string("name",255);
            $table -> string("email",255);
            $table -> string("email-verified-at",255);
            $table -> string("password",255);
            $table -> integer("role");
            $table -> string("avatar",255);
            $table -> string("sdt",10);
            $table -> string("diachi",255);
            $table -> float("dambay");
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
        Schema::dropIfExists('users');
    }
}
