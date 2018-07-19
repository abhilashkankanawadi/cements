<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaySalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('cname');
            $table->string('option_name')->nullable();
            $table->string('phone');
            $table->string('place');
            $table->text('address');
            $table->integer('bags_purchased');
            $table->string('rate_perBag');
            $table->string('payable');
            $table->string('paid');
            $table->string('due');
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
        Schema::dropIfExists('day_sales');
    }
}
