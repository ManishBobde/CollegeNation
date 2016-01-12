<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::USER_ACHEIVEMENTS, function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId');
            $table->foreign('userId')->references('id')->on(TableNameConstants::USERS);
            $table->string('title');
            $table->string('organizedBy')->nullable();
            $table->string('awardedBy');
            $table->string('place')->nullable();
            $table->date('date')->nullable();
            $table->longText('description')->nullable();
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
        Schema::drop(TableNameConstants::USER_ACHEIVEMENTS);
    }
}
