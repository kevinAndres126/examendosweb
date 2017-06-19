<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Cedula')->unique();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('FechaNacimiento');
            $table->string('Direccion');
            $table->string('EstadoCivil');
            $table->string('Sexo');
            $table->string('FechaIngreso');
            $table->string('Descuento');
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
        Schema::dropIfExists('clientes');
    }
}
