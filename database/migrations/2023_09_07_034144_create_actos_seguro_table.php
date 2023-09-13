<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActosSeguroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actos_seguro', function (Blueprint $table) {
            $table->id();
            $table->text('reacciones_personas');
            $table->text('equipo_proteccion');
            $table->text('posicion_persona');
            $table->text('herramienta_equipo');
            $table->text('procedimiento_orden');
            $table->text('ambiente');
            $table->text('observacion');
            $table->date('date');
            $table->string('total')-> nullable();
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
        Schema::dropIfExists('actos_seguro');
    }
}
