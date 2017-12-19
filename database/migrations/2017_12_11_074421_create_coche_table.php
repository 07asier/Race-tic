<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCocheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coche', function (Blueprint $table) {
            
            $table->integer('num_serie');
            $table->string('marca');
            $table->string('motorizacion');
            $table->string('modelo');
            $table->longText('mensaje');
        });

         // Insert some stuff
        DB::table('coche')->insert(
        array(
            'num_serie' => 222,
            'marca' => "TOYOTA",
            'motorizacion' => "dAsda123",
            'modelo'=>"Celica",
            'mensaje'=>"Hola señorito",
        )
    );
        DB::table('coche')->insert(
         array(
            'num_serie'=>123,
            'marca'=>"FORD",
            'motorizacion' =>"asdw222",
            'modelo'=>"Mustang",
            'mensaje'=>"LOLOLOL",   
            )    
     );    
        DB::table('coche')->insert(
         array(
            'num_serie'=>111,
            'marca'=>"Bentley",
            'motorizacion' =>"W12",
            'modelo'=>"Continental GT",
            'mensaje'=>"Holi",   
            )    
     );    
        DB::table('coche')->insert(
         array(
            'num_serie'=>125,
            'marca'=>"Cadillac ",
            'motorizacion' =>"W14",
            'modelo'=>"SRX",
            'mensaje'=>"JEJE",   
            )    
     );    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coche');
    }
}
