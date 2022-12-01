<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\NewsCategory;
use Faker\Generator as Faker;

$factory->define(NewsCategory::class, function (Faker $faker) {
    $title=$this->faker->sentence;
        return [
            'name' => $faker->name,
            'slug'=>Str::slug($title),
            'description'=>$this->faker->text,
            
        ];
});
