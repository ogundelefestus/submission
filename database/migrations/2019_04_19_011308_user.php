<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('user', function(Blueprint $table){
    $table->increments('id');
        $table->timestamps();
        $table->text('fullname');
        $table->string('email')->unique();
        $table->string('password');
        

    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::drop('user');
}
}


