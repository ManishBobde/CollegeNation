<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCn_domainCollege_tenantPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::COLLEGE_TENANTS_DOMAINS_PIVOT, function (Blueprint $table) {
            $table->integer('cn_domain_id')->unsigned()->index();
            $table->foreign('cn_domain_id')->references('id')->on(TableNameConstants::CN_DOMAINS)->onDelete('cascade');
            $table->integer('college_tenant_id')->unsigned()->index();
            $table->foreign('college_tenant_id')->references('id')->on(TableNameConstants::COLLEGE_TENANTS)->onDelete('cascade');
            $table->primary(['cn_domain_id', 'college_tenant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(TableNameConstants::COLLEGE_TENANTS_DOMAINS_PIVOT);
    }
}
