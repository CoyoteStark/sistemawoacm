<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Communitymanager extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communitymanager', function(Blueprint $table){
            $table->increments('id');
            $table->integer('idUsuarios')->unsigned();
            $table->integer('idPersonas')->unsigned();
            $table->foreign('idUsuarios')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idPersonas')->references('id')->on('personas')->onDelete('cascade');
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
        Schema::drop('communitymanager');
    }
}
