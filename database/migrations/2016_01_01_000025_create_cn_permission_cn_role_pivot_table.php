<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCn_permissionCn_rolePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CN_PERMISSION_ROLE_PIVOT, function (Blueprint $table) {
            $table->integer('cn_permission_id')->unsigned()->index();
            $table->foreign('cn_permission_id')->references('id')->on('cn_permissions')->onDelete('cascade');
            $table->integer('cn_role_id')->unsigned()->index();
            $table->foreign('cn_role_id')->references('id')->on('cn_roles')->onDelete('cascade');
            $table->primary(['cn_permission_id', 'cn_role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(TableNameConstants::CN_PERMISSION_ROLE_PIVOT);
    }
}
