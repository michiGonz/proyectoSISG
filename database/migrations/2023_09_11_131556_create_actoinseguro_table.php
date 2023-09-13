<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActoinseguroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actoinseguro', function (Blueprint $table) {
            $table->id();
            $table->text('AE');
            $table->text('CP');
            $table->text('RT');
            $table->text('DT');
            $table->text('PT');
            $table->text('CB');
            $table->text('C');
            $table->text('OC');
            $table->text('OI');
            $table->text('AR');
            $table->text('BM');
            $table->text('TR');
            $table->text('PP');
            $table->text('GO');
            $table->text('AGO');
            $table->text('QAT');
            $table->text('CDA');
            $table->text('CTE');
            $table->text('CCE');
            $table->text('IAI');
            $table->text('SE');
            $table->text('IT');
            $table->text('EFI');
            $table->text('CI');
            $table->text('PI');
            $table->text('PNC');
            $table->text('PNSC');
            $table->text('EOLI');
            $table->text('EOLC');
            $table->text('TIP');
            $table->text('AIP');
            $table->text('CVI');
            $table->text('PHD');
            $table->text('LEHPI');
            $table->text('ARA');
            $table->text('MDP');
            $table->text('ASUE');
            $table->text('AFAS');
            $table->text('MAND');
            $table->text('observacion');
            $table->date('date');
            $table->text('total');
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
        Schema::dropIfExists('actoinseguro');
    }
}
