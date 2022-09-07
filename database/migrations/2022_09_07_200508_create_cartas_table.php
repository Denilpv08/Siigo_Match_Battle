<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

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
            $table->bigIncrements('carta_id');
            $table->bigInteger('sala_id')->unsigned();
            $table->foreign('sala_id')->references('sala_id')->on('salas');
            $table->Integer('numeracion');
            $table->string('cilindraje', 30);
            $table->string('cilindros', 30);
            $table->string('potencia', 30);
            $table->string('Recoluciones', 30);
            $table->string('Peso', 30);
            $table->string('marca', 50);
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

