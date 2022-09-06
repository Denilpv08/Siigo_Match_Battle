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
        Schema::create('tblFichasTecnicas', function (Blueprint $table) {
            $table->bigIncrements('fichaTecnicaId');
            $table->integer('cilindraje');
            $table->integer('refrigeracion');
            $table->integer('potencia');
            $table->integer('sistemaAlimentacion');
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
        Schema::dropIfExists('tblFichasTecnicas');
    }
};
