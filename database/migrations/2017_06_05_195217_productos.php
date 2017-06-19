<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Marca');
            $table->string('Familia');
            $table->string('CasaFabricacion');
            $table->string('TipoUnidad');
            $table->string('Departamento');
            $table->string('Activo');
            $table->string('FechaIngreso');
            $table->string('Unidad');
            $table->string('Impuesto');
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
        Schema::dropIfExists('productos');
    }
}
