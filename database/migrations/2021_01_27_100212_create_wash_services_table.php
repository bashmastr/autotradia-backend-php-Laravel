<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wash_services', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            // $table->string('zip')->nullable(); //on frontend there is no field need to remove
            $table->string('state');
            $table->string('city');
            $table->longText('full_address');
            $table->string('car_name');
            $table->string('car_model')->nullable();
            $table->string('type');
            $table->string('booking_date');
            $table->string('booking_time');
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
        Schema::dropIfExists('wash_services');
    }
}
