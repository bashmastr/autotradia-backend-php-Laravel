<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstantCarFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instant_car_feature', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instant_sell_car_id');
            $table->foreign('instant_sell_car_id')->references('id')->on('instant_sell_cars')->onDelete('cascade');
            $table->unsignedBigInteger('car_feature_id');
            $table->foreign('car_feature_id')->references('id')->on('car_features')->onDelete('cascade');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('instant_car_feature');
    }
}
