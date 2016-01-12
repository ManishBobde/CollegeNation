<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentAffairsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CURRENT_AFFAIRS, function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->string('imageUrl');
            $table->string('sourceUrl');
            $table->integer('cnUserId');
            $table->foreign('cnUserId')->references('id')->on(TableNameConstants::CN_USERS)->onDelete('cascade');
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
        Schema::drop(TableNameConstants::CURRENT_AFFAIRS);
    }
}
