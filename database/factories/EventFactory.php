<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $title=$this->faker->sentence;
    return [
        'name' => $faker->name,
        'slug'=>Str::slug($title),
        'description'=>$this->faker->text,
        'eventcat_id '=>'1',
        'image' =>"images/categories/logo.jpg",
        'location'=>$this->faker->text,
        'event_date'=>now(),
        'event_time'=>now() 
    ];
});
