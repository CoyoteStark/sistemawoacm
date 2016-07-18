<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permisosrol extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('permisosrol', function(Blueprint $table){
            $table->integer('idRoles')->unsigned();
            $table->integer('idPermisos')->unsigned();
            $table->boolean('permitir');
            $table->foreign('idRoles')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('idPermisos')->references('id')->on('permisos')->onDelete('cascade');
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
        Schema::drop('permisosrol');
    }
}
