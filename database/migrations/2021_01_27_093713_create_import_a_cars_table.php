<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportACarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_a_cars', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city');
            $table->string('email');
            $table->string('phone');
            $table->string('car_name');
            $table->string('car_model');
            $table->string('car_year')->nullable();
            $table->string('car_color');
            $table->string('company')->nullable();
            $table->string('preferred_country');
            $table->string('condition');
            $table->string('expected_budget');
            $table->string('expected_date')->nullable();
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
        Schema::dropIfExists('import_a_cars');
    }
}
