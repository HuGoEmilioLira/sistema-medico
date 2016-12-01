<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->integer('professional_id')->unsigned();
            $table->foreign('professional_id')->references('id')->on('professionals');

            $table->string('asunto');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('duracion');
            $table->text('recomendacion');

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
        Schema::dropIfExists('appointments');
    }
}
