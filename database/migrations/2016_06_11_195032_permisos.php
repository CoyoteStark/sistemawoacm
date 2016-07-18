<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permisos extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('idClave')->unsigned();
            $table->string('nombre', 50);
            $table->string('descripcion', 150);
            $table->foreign('idClave')->references('id')->on('clave')->onDelete('cascade');
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
     Schema::drop('permisos');
    }

}
