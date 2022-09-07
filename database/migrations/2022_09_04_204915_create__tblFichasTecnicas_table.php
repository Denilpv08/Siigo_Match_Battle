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
        Schema::create('fichas_Tecnicas', function (Blueprint $table) {
            $table->bigIncrements('ficha_tecnica_id');
            $table->integer('cilindraje');
            $table->integer('refrigeracion');
            $table->integer('potencia');
            $table->integer('sistema_alimentacion');
            $table->integer('torque');
            $table->integer('velocidad');
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
        Schema::dropIfExists('fichas_Tecnicas');
    }
};
