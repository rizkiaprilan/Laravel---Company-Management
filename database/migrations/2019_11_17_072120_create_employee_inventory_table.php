<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('inventory_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('employee_inventory',function (Blueprint $table){
            $table->foreign('employee_id')->references('id')->on('employees');
        });

        Schema::table('employee_inventory',function (Blueprint $table){
            $table->foreign('inventory_id')->references('id')->on('inventories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_inventories');
    }
}
