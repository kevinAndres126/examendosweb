<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movimientoinventariodetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientoinventariodetalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMovimientoInventario')->unsigned();
            $table->integer('idInventario')->unsigned();
            $table->integer('CantidadAnterior');
            $table->integer('NuevaCantidad');
            $table->foreign('idMovimientoInventario')->references('id')->on('movimientoinventario');
            $table->foreign('idInventario')->references('id')->on('inventario');
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
        Schema::dropIfExists('movimientoinventariodetalle');
    }
}
