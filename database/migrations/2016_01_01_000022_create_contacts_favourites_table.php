<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsFavouritesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CONTACT_FAVOURITES, function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId');
            $table->foreign('userId')->references('id')->on(TableNameConstants::USERS);
            $table->integer('favouriteUserId');
            $table->foreign('favouriteUserId')->references('id')->on(TableNameConstants::USERS);
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
        Schema::drop(TableNameConstants::CONTACT_FAVOURITES);
    }
}
