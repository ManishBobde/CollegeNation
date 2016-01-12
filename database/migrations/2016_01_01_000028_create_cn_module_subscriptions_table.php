<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnModuleSubscriptionsTable extends Migration
{
    const TABLE_NAME = "cn_module_subscriptions";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TABLE_NAME, function(Blueprint $table){
            $table->increments('id');
            $table->integer('subscriptionInDays')->nullable();
            $table->integer('subscriptionInMonths')->nullable();
            $table->integer('subscriptionInYears')->nullable();
            $table->double('subscriptionTotalPrice');
            $table->integer('moduleId');
            $table->foreign('moduleId')->references('id')->on(TableNameConstants::CN_MODULES);
            $table->integer('collegeTenantId');
            $table->foreign('collegeTenantId')->references('id')->on(TableNameConstants::CN_COLLEGE_TENANTS);
            $table->date('trialEndsOn')->nullable();
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
        Schema::drop(TABLE_NAME);
    }
}
