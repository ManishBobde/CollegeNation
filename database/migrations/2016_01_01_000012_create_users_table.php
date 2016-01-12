<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::USERS, function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('mobileNumber');
            $table->date('dob')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('avatarUrl')->nullable();
            $table->boolean('isActive');
            $table->integer('academicYear');
            $table->integer('roleId');
            $table->foreign('roleId')->references('id')->on(TableNameConstants::CN_ROLES);
            $table->integer('departmentId');
            $table->foreign('departmentId')->references('id')->on(TableNameConstants::COLLEGE_DEPARTMENTS)->onDelete('cascade');
            $table->integer('collegeTenantId');
            $table->foreign('collegeTenantId')->references('id')->on(TableNameConstants::CN_COLLEGE_TENANTS)->onDelete('cascade');
            $table->rememberToken();
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
        Schema::drop(TableNameConstants::USERS);
    }
}
