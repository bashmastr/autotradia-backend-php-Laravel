<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_categories')->insert([
            [
                'name' => 'luxury car',
                'slug' => 'luxury-car',
                'description' => 'This is totally dummy content for the demo purposes',
               
            ],
            [
                'name' => 'Small Cars',
                'slug' => 'small-cars',
               'description' => 'This is totally dummy content for the demo purposes',
            ],
            [
                'name' => 'Big Cars',
                'slug' => 'big-cars',
               'description' => 'This is totally dummy content for the demo purposes',
               
            ],
            [
                'name' => 'Jeeps',
                'slug' => 'jeeps ',
               'description' => 'This is totally dummy content for the demo purposes',
               
            ],
            [
                'name' => 'Sports Cars',
                'slug' => 'sports-cars ',
                'description' => 'This is totally dummy content for the demo purposes',
               
            ]
        ]);
    }
}
