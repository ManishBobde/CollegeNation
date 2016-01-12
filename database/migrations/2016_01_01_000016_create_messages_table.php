<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::MESSAGES, function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->longText('body')->nullable();
            $table->integer('creatorId');
            $table->foreign('creatorId')->references('id')->on(TableNameConstants::USERS);
            $table->timestamp('deleted_at');
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
        Schema::drop(TableNameConstants::MESSAGES);
    }
}
