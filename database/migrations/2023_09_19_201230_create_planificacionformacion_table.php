<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificacionformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacionformacion', function (Blueprint $table) {
            $table->id();
            $table->text('programadas_anual');
            $table->string('programadas_mensual');
            $table->string('programadas_seguridad');
            $table->string('programadas_salud');
            $table->string('programadas_ambiente');
            $table->date('date');
            $table->string('observacion');
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
        Schema::dropIfExists('planificacionformacion');
    }
}
