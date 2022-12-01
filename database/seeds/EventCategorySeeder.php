<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_categories')->insert([
            [
                'name' => 'Cars Night',
                'slug' => 'cars-night',
                'description' => 'This is just a dummy description',
                
            ],
            [
                'name' => 'New Year Celebration',
                'slug' => 'new-year-celebration',
                   'description' => 'This is just a dummy description',
                
            ],
            [
                'name' => 'Eid Days Sports Gala',
                'slug' => 'eid-days-sports-gala',
                   'description' => 'This is just a dummy description',
                
            ],


     
        ]);
    }
}
