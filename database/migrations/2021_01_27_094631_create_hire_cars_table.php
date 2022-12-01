<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHireCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_cars', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
          
            $table->string('state');
            $table->string('city');
            $table->longText('full_address');
         
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->string('pickup_time');
            $table->string('pickup_date');
            $table->string('expected_budget')->nullable();
            $table->string('days');
            $table->string('car_model')->nullable();
            $table->string('car_requested')->nullable();
            $table->longText('additional_notes')->nullable();
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
        Schema::dropIfExists('hire_cars');
    }
}
