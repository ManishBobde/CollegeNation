<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageUrlsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::IMAGE_URLS, function(Blueprint $table){
            $table->increments('id');
            $table->integer('moduleId');
            $table->foreign('moduleId')->references('id')->on(TableNameConstants::CN_MODULES);
            $table->string('imageUrl');
            $table->integer('userId');
            $table->foreign('userId')->references('id')->on(TableNameConstants::USERS);
            $table->morphs('imageable');
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
        Schema::drop(TableNameConstants::IMAGE_URLS);
    }
}
