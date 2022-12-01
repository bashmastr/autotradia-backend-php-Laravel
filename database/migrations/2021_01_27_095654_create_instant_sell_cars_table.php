<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstantSellCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instant_sell_cars', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('city');
            $table->longText('full_address');
            $table->string('car_name');
            $table->string('car_model');
            $table->string('car_year')->nullable();
            $table->string('car_color');
            $table->string('price');
            $table->string('condition')->nullable();
            $table->longText('descriptions')->nullable();
            $table->string('registeration_no');
            $table->string('registeration_city')->nullable();
            $table->string('featured_image');
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
        Schema::dropIfExists('instant_sell_cars');
    }
}
