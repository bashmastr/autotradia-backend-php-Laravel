<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title=$this->faker->sentence;
    return [
        'name' => $faker->name,
        'slug'=>Str::slug($title),
        'description'=>$this->faker->text,
        'image' =>"images/categories/logo.jpg",
    ];
});
