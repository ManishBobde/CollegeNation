<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePushRegistrationTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::PUSH_REGISTRATION_TOKENS, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->foreign('userId')->references('id')->on(TableNameConstants::USERS);
            $table->string('pushRegistrationToken')->nullable();
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
        Schema::drop(TableNameConstants::PUSH_REGISTRATION_TOKENS);
    }
}
