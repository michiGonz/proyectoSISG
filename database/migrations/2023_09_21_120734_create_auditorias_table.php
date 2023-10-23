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
            $table->string('permisos_generadosqqg');
            $table->string('permisos_generadospdvsa');
            $table->string('total_permisos');

            $table->string('desvqqgas_1');
            $table->string('desvqqgas_2');
            $table->string('desvqqgas_3');
            $table->string('desvqqgas_4');
            $table->string('desvqqgas_5');
            $table->string('desvqqgas_6');
            $table->string('desvqqgas_7');
            $table->string('desvqqgas_8');
            $table->string('desvqqgas_9');
            $table->string('desvqqgas_10');
            $table->string('desvqqgas_11');
            $table->string('desvqqgas_12');
            $table->string('desvqqgas_13');
            $table->string('desvqqgas_14');
            $table->string('desvqqgas_15');
            $table->string('desvqqgas_16');

            $table->string('desvpdvsa_1');
            $table->string('desvpdvsa_2');
            $table->string('desvpdvsa_3');
            $table->string('desvpdvsa_4');
            $table->string('desvpdvsa_5');
            $table->string('desvpdvsa_6');
            $table->string('desvpdvsa_7');
            $table->string('desvpdvsa_8');
            $table->string('desvpdvsa_9');
            $table->string('desvpdvsa_10');
            $table->string('desvpdvsa_11');
            $table->string('desvpdvsa_12');
            $table->string('desvpdvsa_13');
            $table->string('desvpdvsa_14');
            $table->string('desvpdvsa_15');
            $table->string('desvpdvsa_16');

            $table->string('auditadas_pdvsa');
            $table->string('auditadas_qqgas');
            $table->string('desviacion_qqgas');
            $table->string('desviaciones_pdvsa');
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
