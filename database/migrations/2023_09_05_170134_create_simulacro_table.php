<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<<< HEAD:database/migrations/2023_09_07_035410_create_indicator_table.php
class CreateIndicatorTable extends Migration
========
class CreateSimulacroTable extends Migration
>>>>>>>> dfaed05db36b252590d6b264daac07e9ebc834e8:database/migrations/2023_09_05_170134_create_simulacro_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2023_09_07_035410_create_indicator_table.php
        Schema::create('indicator', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
========
        Schema::create('simulacro', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('hallazgos');
            $table->text('ubicacion');
            $table->text('descripcion');
            $table->date('date');
>>>>>>>> dfaed05db36b252590d6b264daac07e9ebc834e8:database/migrations/2023_09_05_170134_create_simulacro_table.php
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
<<<<<<<< HEAD:database/migrations/2023_09_07_035410_create_indicator_table.php
        Schema::dropIfExists('indicator');
========
        Schema::dropIfExists('simulacro');
>>>>>>>> dfaed05db36b252590d6b264daac07e9ebc834e8:database/migrations/2023_09_05_170134_create_simulacro_table.php
    }
}
