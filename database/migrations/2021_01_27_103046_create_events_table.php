<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('eventcat_id');
            $table->foreign('eventcat_id')->references('id')->on('event_categories')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->longText('description');
            $table->string('status')->default('1');
            $table->string('featured')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
