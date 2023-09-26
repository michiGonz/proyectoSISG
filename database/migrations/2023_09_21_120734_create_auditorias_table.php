<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditorias', function (Blueprint $table) {
            $table->id();
            $table->string('permisos_generados');
            $table->string('auditadas_pdvsa');
            $table->string('auditadas_qqgas');
            $table->string('desviacion_qqgas');
            $table->string('desviaciones_pdvsa');
            $table->string('sindesviacion_qqgas');
            $table->string('sindesviacionpdvsa');
            $table->string('noauditadas_qqgas');
            $table->string('noauditadas_pdvsa');
            $table->text('observacion');
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
        Schema::dropIfExists('auditorias');
    }
}
