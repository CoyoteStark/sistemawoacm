<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cuentasrs extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('cuentasrs', function(Blueprint $table){
        $table->increments('id');
        $table->string('usuario',50);
        $table->string('contrasenia', 80);
        $table->integer('idClientes')->unsigned();
        $table->integer('idRedSocial')->unsigned();
        $table->foreign('idClientes')->references('id')->on('clientes')->onDelete('cascade');
        $table->foreign('idRedSocial')->references('id')->on('redsocial')->onDelete('cascade');
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
        Schema::drop('cuentasrs');
    }
}
