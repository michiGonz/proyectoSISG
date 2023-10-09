<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosprofitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariosprofit', function (Blueprint $table) {
       
            $table->text('cod_emp');
            $table->text('nombres');
            $table->text('apellidos');
            $table->text('co_cargo');
            $table->text('co_depart');
            $table->text('co_ubicacion');
            $table->text('status');
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
        Schema::dropIfExists('usuariosprofit');
    }
}
