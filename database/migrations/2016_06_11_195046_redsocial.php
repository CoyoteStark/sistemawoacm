<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Redsocial extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redsocial', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('descripcion', 100);
            $table->string('URL',100);
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
        Schema::drop('redsocial');
    }

}
