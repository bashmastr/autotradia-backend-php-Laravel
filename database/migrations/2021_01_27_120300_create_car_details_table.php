<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ad_id');
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->string('car_model');
            $table->string('company');
            $table->string('year');
            $table->string('car_color');
            $table->string('fuel_type');
            $table->string('milage');
            $table->string('condition');
            $table->string('transmission');
            $table->string('owner');
            $table->string('engine');
            $table->string('registeration_no')->nullable();
            $table->string('registeration_city')();
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
        Schema::dropIfExists('car_details');
    }
}
