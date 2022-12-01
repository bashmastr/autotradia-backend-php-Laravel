<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Sports Cars At Monal 2021',
                'slug' => 'sports-cars-at-monal-2021',
                'description' => 'This is totally dummy content for testing purposes',
                'eventcat_id' => '1',
                'image' => 'car_rest.jpg',
                'location' => 'Islamabad',
                'event_date' => Carbon::now()->format('Y-m-d'),
                'event_time' => Carbon::now()->format('h:i:s'),
            ],
            [
                'name' => 'Night Racers at Kashmir Highway',
                'slug' => 'night-racers-at-kashmir-highway',
                 'description' => 'This is totally dummy content for testing purposes',
                'eventcat_id' => '2',
                'image' => 'car_rest.jpg',
                'location' => 'Peshawar',
                'event_date' => Carbon::now()->format('Y-m-d'),
                'event_time' => Carbon::now()->format('h:i:s'),
            ],
            [
                'name' => 'Old Model Cars Gathering at Raja Bazar',
                'slug' => 'old-model-cars-gathering-at-raja-bazar',
                 'description' => 'This is totally dummy content for testing purposes',
                'eventcat_id' => '3',
                'image' => 'car_rest.jpg',
                'location' =>'Islamabad',
                'event_date' => Carbon::now()->format('Y-m-d'),
                'event_time' => Carbon::now()->format('h:i:s'),
            ],


            [
                'name' => 'Only Honda Cars Gathering 2021',
                'slug' => 'only-honda-cars-gathering-2021',
                 'description' => 'This is totally dummy content for testing purposes',
                'eventcat_id' => '3',
                'image' => 'car_rest.jpg',
                'location' => 'Islamabad',
                'event_date' => Carbon::now()->format('Y-m-d'),
                'event_time' => Carbon::now()->format('h:i:s'),
            ],
            [
                'name' => 'New shape sports cars gala 2021',
                'slug' => 'new-shape-sports-gala-2021',
                 'description' => 'This is totally dummy content for testing purposes',
                'eventcat_id' => '3',
                'image' => 'car_rest.jpg',
                'location' => 'Peshawar',
                'event_date' => Carbon::now()->format('Y-m-d'),
                'event_time' => Carbon::now()->format('h:i:s'),
                
            ]
        ]);
    }
}
