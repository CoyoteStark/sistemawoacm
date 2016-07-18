<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personas extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        
        Schema::create('personas', function(Blueprint $table){

               //$table->increments('idPersonas')->primary();
               $table->increments('id');
               $table->string('nombre', 80);
               $table->string('apellidoPaterno', 50);
               $table->string('apellidoMaterno', 50);
               $table->string('direccion', 100);
               $table->string('ciudad', 45);
               $table->smallInteger('cp');
               $table->string('telefono', 20);
               $table->string('celular', 20);
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
        Schema::drop('personas');
    }

}
