<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::EVENTS, function(Blueprint $table){
            $table->increments('id');
            $table->string('eventTitle');
            $table->string('eventDescription');
            $table->date('startDate');
            $table->date('endDate')->nullable();
            $table->time('startTime');
            $table->time('endTime');
            $table->integer('creatorId');
            $table->foreign('creatorId')->references('id')->on(TableNameConstants::USERS);
            $table->integer('collegeTenantId');
            $table->foreign('collegeTenantId')->references('id')->on(TableNameConstants::CN_COLLEGE_TENANTS)->onDelete('cascade');
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
        Schema::drop(TableNameConstants::EVENTS);
    }
}
