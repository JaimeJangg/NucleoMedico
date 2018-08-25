<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('id_type_user');
            $table->boolean('create');
            $table->boolean('schedule');
            $table->boolean('view');
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
        //
    }
}
