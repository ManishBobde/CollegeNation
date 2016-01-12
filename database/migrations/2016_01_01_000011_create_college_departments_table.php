<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeDepartmentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::COLLEGE_DEPARTMENTS, function(Blueprint $table){
            $table->increments('id');
            $table->integer('collegeTenantId');
            $table->foreign('collegeTenantId')->references('id')->on(TableNameConstants::CN_COLLEGE_TENANTS)->onDelete('cascade');;
            $table->integer('domainId');
            $table->foreign('domainId')->references('id')->on(TableNameConstants::CN_DOMAINS);
            $table->integer('streamId');
            $table->foreign('streamId')->references('id')->on(TableNameConstants::CN_STREAMS);
            $table->string('departmentName');
            $table->integer('totalTeachingStaff');
            $table->integer('totalSeatingCapacity');
            $table->integer('academicPattern');/*Annual/Semester*/
            $table->integer('academicTenure');/*No of years/No of Semesters*/
            $table->string('studentsRegistrationKey');
            $table->string('teachingStaffRegistrationKey');
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
        Schema::drop(TableNameConstants::COLLEGE_DEPARTMENTS);
    }
}
