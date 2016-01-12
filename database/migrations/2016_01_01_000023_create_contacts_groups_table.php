<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsGroupsTable extends Migration
{
    const TABLE_NAME = "contacts_groups";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CONTACT_GROUPS, function(Blueprint $table){
            $table->increments('id');
            $table->string('groupTitle');
            $table->integer('creatorId');
            $table->foreign('creatorId')->references('id')->on(TableNameConstants::USERS);
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
        Schema::drop(TableNameConstants::CONTACT_GROUPS);
    }
}
