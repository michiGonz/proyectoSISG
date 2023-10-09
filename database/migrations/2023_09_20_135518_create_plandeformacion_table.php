<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlandeformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plandeformacion', function (Blueprint $table) {
            $table->id();
            $table->text('ejecutadas_ambiente');
            $table->date('date_ambiente');
            $table->text('ejecutadas_seguridad');
            $table->date('date_seguridad');
            $table->text('ejecutadas_salud');
            $table->date('date_salud');
            $table->text('observacion');
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
        Schema::dropIfExists('plandeformacion');
    }
}
