<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida', function (Blueprint $table) {
            $table->id('id_partida');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('carta_id');


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('carta_id')->references('id_carta')->on('cartas');

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
        Schema::dropIfExists('partida');
    }
};
