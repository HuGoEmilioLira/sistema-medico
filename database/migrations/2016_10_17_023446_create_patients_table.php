<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('ocupacion');
            $table->string('estado_civil');
            $table->string('dni',8);
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->string('lprocedencia');
            $table->string('direccion');
            $table->string('fijo');
            $table->string('movil');

            //cada vez que alguien modifique se guardará la fecha timestamps
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
        Schema::dropIfExists('patients');
    }
}
