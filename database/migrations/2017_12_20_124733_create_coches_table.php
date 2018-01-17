<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCochesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->primary('num_serie');
            $table->integer('num_serie')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('marca');
            $table->string('motor');
            $table->string('modelo');
            $table->longText('mensaje');
            $table->rememberToken();
            //$table->timestamps();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Schema::table('coches',function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('coches');
        Schema::table('coches', function (Blueprint $table) {
            $table->dropForeign('coches_user_id_foreign');
        });
    }
}
