<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActosSeguroTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('actos_seguro', function (Blueprint $table) {
            $table->id();
            $table->text('RP_main');
            $table->text('EPP_main');
            $table->text('PP_main');
            $table->text('HE_main');
            $table->text('PROCE_main');
            $table->text('OL_main');
            $table->text('A_main');
            $table->text('observacion');
            $table->date('date');
            $table->string('cantidad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('actos_seguro');
    }
}