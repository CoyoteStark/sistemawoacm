<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {


        public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->integer('idRoles')->unsigned();
            $table->foreign('idRoles')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}