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
        Schema::create('tblMotos', function (Blueprint $table) {
            $table->bigIncrements('motoId');
            $table->bigInteger('fichaTecnicaId');
            $table->foreign('fichaTecnicaId')->references('fichaTecnicaId')->on('tblFichasTecnicas');
            $table->bigInteger('vehiculoDatosId');
            $table->foreign('vehiculoDatosId')->references('vehiculoDatosId')->on('tblVehiculosDatos');
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
        Schema::dropIfExists('tblMotos');
    }
};
