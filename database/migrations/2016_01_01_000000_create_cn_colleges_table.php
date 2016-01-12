<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnCollegesTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CN_COLLEGES, function(Blueprint $table){
            $table->increments('id');
            $table->string('collegeName');
            $table->string('collegeContactNumber');
            $table->string('collegeEmailId');
            $table->integer('collegeType');/*Affiliated/Autonomous*/
            $table->string('address');
            $table->integer('pincode');
            $table->string('city');
            $table->string('state');
            $table->string('websiteUrl')->nullable();
            $table->integer('yearOfEstablishment');
            $table->integer('universityType');
            $table->string('universityName')->nullable();
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
        Schema::drop(TableNameConstants::CN_COLLEGES);
    }
}
