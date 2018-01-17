<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_carrera');
            $table->integer('n_serie')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->integer('velocidad');
            $table->integer('revoluciones');
            $table->integer('temperatura');
            $table->rememberToken();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            //$table->timestamps();
        });

        Schema::table('carreras',function(Blueprint $table) {
            $table->foreign('n_serie')->references('num_serie')->on('coches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('carreras');

        Schema::table('carreras', function (Blueprint $table) {
            $table->dropForeign('carreras_n_serie_foreign');
            $table->dropForeign('carreras_usuario_id_foreign');
        });
    }
}
