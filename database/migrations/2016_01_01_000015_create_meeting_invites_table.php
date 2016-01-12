<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::MEETING_INVITES, function(Blueprint $table){
            $table->increments('id');
            $table->integer('creatorId');
            $table->foreign('creatorId')->references('id')->on(TableNameConstants::USERS);
            $table->string('title');
            $table->longText('description')->nullable();
            $table->date('meetingDate');
            $table->time('startTime');
            $table->time('endTime');
            $table->integer('status');
            $table->string('venue');
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
        Schema::drop(TableNameConstants::MEETING_INVITES);
    }
}
