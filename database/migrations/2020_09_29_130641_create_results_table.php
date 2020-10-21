<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->tinyInteger('conciencia_de_si_mismo');
            $table->tinyInteger('agilidad_de_cambio');
            $table->tinyInteger('agilidad_mental');
            $table->tinyInteger('agilidad_interpersonal');
            $table->tinyInteger('agilidad_de_resultados');
            $table->tinyInteger('subtotal_agilidad');
            $table->tinyInteger('subtotal_perfil');
            $table->tinyInteger('posicion_potencial_automatica')->nullable();
            $table->tinyInteger('posicion_potencial_sugerida')->nullable();
            $table->longtext('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
