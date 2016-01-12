<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnStreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CN_STREAMS, function(Blueprint $table){
            $table->increments('id');
            $table->string('streamName');
            $table->integer('domainId');
            $table->foreign('domainId')->references('id')->on(TableNameConstants::CN_DOMAINS)->onDelete('cascade');
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
        Schema::drop(TableNameConstants::CN_STREAMS);
    }
}
