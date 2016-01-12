<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::ACCESS_TOKENS, function(Blueprint $table){
            $table->increments('id');
            $table->string('accessToken')->unique();
            $table->integer('deviceType')->nullable();
            $table->integer('mediaType')->nullable();
            $table->string('osName')->nullable();
            $table->string('idleTimeAuthTokenExpirationDuration');
            $table->integer('userId');
            $table->foreign('userId')->references('id')->on(TableNameConstants::USERS)->onDelete('cascade');
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
        Schema::drop(TableNameConstants::ACCESS_TOKENS);
    }
}
