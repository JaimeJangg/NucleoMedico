<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function(Blueprint $table){
            $table->increments('id');
            $table->string('day');
            $table->timestamps();
        });

        Schema::create('days_off', function(Blueprint $table){
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
