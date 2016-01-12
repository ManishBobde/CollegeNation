<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableNameConstants::CN_MODULES, function(Blueprint $table){
            $table->increments('id');
            $table->string('moduleName');
            $table->string('moduleDescription');
            $table->integer('moduleType'); // should this be renamed as moduleType - free/paid?
            $table->double('basePrice');
            $table->integer('moduleState'); // Shouldn't this be in subscription table?
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
        Schema::drop(TableNameConstants::CN_MODULES);
    }
}
