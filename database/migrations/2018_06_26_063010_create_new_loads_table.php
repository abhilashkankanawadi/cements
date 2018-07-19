<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_loads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('bags');
            $table->string('previous_bags');
            $table->string('bill_paid');
            $table->string('bag_rate');
            $table->string('unload_charge')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('bill_image')->nullable();
            $table->string('receiver_name')->nullable();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('new_loads');
    }
}
