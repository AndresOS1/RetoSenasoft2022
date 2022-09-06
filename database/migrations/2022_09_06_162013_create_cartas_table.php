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
        Schema::create('cartas', function (Blueprint $table) {
            $table->id('id_carta');
            $table->string('carta');
            $table->string('img_carta');
            $table->string('modelo');
            $table->integer('cilindraje');
            $table->integer('cilindros');
            $table->integer('potencia');
            $table->integer('revoluciones');
            $table->integer('peso');

            

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
        Schema::dropIfExists('cartas');
    }
};
