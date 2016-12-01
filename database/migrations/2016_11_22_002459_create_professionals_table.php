<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('categoria');
            $table->string('colegiado');
            $table->string('estado');
            $table->string('dni',8);
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->string('lprocedencia');
            $table->string('direccion');
            $table->string('fijo');
            $table->string('movil');
            $table->string('observacion');

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
        Schema::dropIfExists('professionals');
    }
}
