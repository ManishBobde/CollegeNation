<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectRequestsTable extends Migration
{
    const TABLE_NAME = "connect_requests";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CONNECT_REQUESTS, function(Blueprint $table){
            $table->increments('id');
            $table->integer('senderId');
            $table->foreign('senderId')->references('id')->on(TableNameConstants::USERS);
            $table->integer('receiverId');
            $table->foreign('receiverId')->references('id')->on(TableNameConstants::USERS);
            $table->integer('status');
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
        Schema::drop(TableNameConstants::CONNECT_REQUESTS);
    }
}
