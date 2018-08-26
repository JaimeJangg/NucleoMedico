<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('type_user', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('last_name');
            $table->integer('phone');
            $table->string('token');
            $table->integer('id_type_user')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_type_user')->references('id')->on('type_user');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
