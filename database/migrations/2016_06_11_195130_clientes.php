<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
         Schema::create('clientes', function(Blueprint $table){
           //$table->increments('idClientes')->primary();
           $table->increments('id');
           $table->integer('idPersona')->unsigned();
           $table->foreign('idPersona')->references('id')->on('personas')->onDelete('cascade');
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
        Schema::drop('clientes');
    }

}
