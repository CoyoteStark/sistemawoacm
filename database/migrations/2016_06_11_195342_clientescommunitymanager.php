<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientescommunitymanager extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('clientescommunitymanager', function(Blueprint $table){
            $table->integer('idCliente')->unsigned();
            $table->integer('idCommunityManager')->unsigned();
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('idCommunityManager')->references('id')->on('communitymanager')->onDelete('cascade');
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
        Schema::drop('clientescommunitymanager');
    }
}
