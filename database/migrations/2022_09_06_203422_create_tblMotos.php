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
        Schema::create('motos', function (Blueprint $table) {
            $table->bigIncrements('moto_id');
            $table->bigInteger('ficha_tecnica_id')->unsigned();
            $table->foreign('ficha_tecnica_id')->references('ficha_tecnica_id')->on('fichas_Tecnicas');
            $table->bigInteger('vehiculo_dato_id')->unsigned();
            $table->foreign('vehiculo_dato_id')->references('vehiculo_dato_id')->on('vehiculos_datos');
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
        Schema::dropIfExists('motos');
    }
};
