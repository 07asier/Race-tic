<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCocheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_coche', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('serie_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('users_coche',function(Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('serie_id')->references('num_serie')->on('coches')->onDelete('cascade')->onUpdate('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('users_coche');
        Schema::table('users_coche', function (Blueprint $table) {
            $table->dropForeign('users_coche_user_id_foreign');
            $table->dropForeign('users_coche_serie_id_foreign');
        });
    }
}
