<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_registros', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->integer('carrera_id')->unsigned();
            $table->integer('velocidad');
            $table->integer('revoluciones');
            $table->integer('temperatura');
            $table->timestamps();
        });

        Schema::table('carreras_registros',function(Blueprint $table) {
            $table->foreign('carrera_id')->references('id_carrera')->on('carreras')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carreras', function (Blueprint $table) {
            $table->dropForeign('carreras_registros_carrera_id_foreign');
        });
    }
}
