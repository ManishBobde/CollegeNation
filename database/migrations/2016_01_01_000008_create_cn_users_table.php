<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CN_USERS, function(Blueprint $table){
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('emailId')->unique();
            $table->string('password');
            $table->string('mobileNumber')->unique();
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
        Schema::drop(TableNameConstants::CN_USERS);
    }
}
