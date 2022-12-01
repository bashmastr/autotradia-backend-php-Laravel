<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'luxury car',
                'slug' => 'luxury-car',
                'description' => 'Inside out fully original',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Small Cars',
                'slug' => 'small-cars',
                'description' => 'Inside out fully original',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Big Cars',
                'slug' => 'big-cars',
                'description' => 'Inside out fully original',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Jeeps',
                'slug' => 'jeeps ',
                'description' => 'Inside out fully original',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Sports Cars',
                'slug' => 'sports-cars ',
                'description' => 'Inside out fully original',
                'image' => 'car_rest.jpg',
            ]
        ]);
    }
}
