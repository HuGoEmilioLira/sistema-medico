<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');

            // Comenzamos a introducir los atributos
            $table->string('nombre');
            $table->string('razon');
            $table->string('domicilio');
            $table->string('ruc',11)->unique();
            $table->string('contribuyente');
            $table->string('giro');
            $table->string('distrito');
            $table->string('provincia');
            $table->string('departamento');
            $table->string('pais');
            $table->string('fijo');
            $table->string('correo');
            $table->string('web');
            $table->string('observacion');

            // timestamps es para tener un control en las modificaciones del sistema
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
        Schema::dropIfExists('clinics');
    }
}
