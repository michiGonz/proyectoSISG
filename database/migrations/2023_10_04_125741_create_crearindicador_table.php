<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrearindicadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crearindicador', function (Blueprint $table) {
            $table->id();
            $table->text('tipo_indicador');
            $table->text('name');
            $table->text('ubicacion');
            $table->text('observacion');
            $table->text('description');
            $table->text('nombre_incidente');
            $table->text('cantidad');
            $table->string('ejecutados');
            $table->string('cantidad_actividad');
            $table->date('date');
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
        Schema::dropIfExists('crearindicador');
    }
}
