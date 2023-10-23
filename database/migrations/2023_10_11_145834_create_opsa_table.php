<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opsa', function (Blueprint $table) {
            $table->id();
            $table->text('RP_main');
            $table->text('EPP_main');
            $table->text('PP_main');
            $table->text('HE_main');
            $table->text('PROCE_main');
            $table->text('OL_main');
            $table->text('A_main');
            $table->text('RP_1');
            $table->text('RP_2');
            $table->text('RP_3');
            $table->text('RP_4');
            $table->text('RP_5');
            $table->text('RP_6');
            $table->text('EPP_1');
            $table->text('EPP_2');
            $table->text('EPP_3');
            $table->text('EPP_4');
            $table->text('EPP_5');
            $table->text('EPP_6');
            $table->text('EPP_7');
            $table->text('PP_1');
            $table->text('PP_2');
            $table->text('PP_3');
            $table->text('PP_4');
            $table->text('PP_5');
            $table->text('PP_6');
            $table->text('PP_7');
            $table->text('PP_8');
            $table->text('HE_1');
            $table->text('HE_2');
            $table->text('HE_3');
            $table->text('OL_1');
            $table->text('OL_2');
            $table->text('OL_3');
            $table->text('PROCE_1');
            $table->text('PROCE_2');
            $table->text('PROCE_3');
            $table->text('A_1');
            $table->text('A_2');
            $table->text('A_3');
            $table->text('A_4');
            $table->text('A_5');
            $table->text('A_6');
            $table->text('A_7');
            $table->text('A_8');
            $table->text('A_9');
            $table->text('A_10');
            $table->text('cantidad_seguro');
            $table->text('cantidad_inseguro');
            $table->text('total');
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
    public function down()
    {
        Schema::dropIfExists('opsa');
    }
}
