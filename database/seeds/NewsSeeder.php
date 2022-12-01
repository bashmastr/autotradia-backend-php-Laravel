<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'name' => 'Honda Company Bankrupting Soon 2023',
                'slug' => 'honda-company-bankrupt-2023',
                'description' => 'This is totally dummy content for the news because we are testing the whole website. and its not easy to write in details',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Toyota Launching MotorBike in 2032',
                'slug' => 'toyota-launching-motorbike-2032',
                          'description' => 'This is totally dummy content for the news because we are testing the whole website. and its not easy to write in details',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Govt Impose tax of Rs 200 on Isb drivers',
                'slug' => 'goct-impose-taxes-on-isb-drivers',
                          'description' => 'This is totally dummy content for the news because we are testing the whole website. and its not easy to write in details',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Toyota Official Launching Shadi Jeeps in 2025',
                'slug' => 'toyota-official-launching-shadi-jeeps ',
                          'description' => 'This is totally dummy content for the news because we are testing the whole website. and its not easy to write in details',
                'image' => 'car_rest.jpg',
            ],
            [
                'name' => 'Best Tyres and Rims Available At Bahria',
                'slug' => 'best-tyres-rims-shop-bahria',
                          'description' => 'This is totally dummy content for the news because we are testing the whole website. and its not easy to write in details',
                'image' => 'car_rest.jpg',
            ]
        ]);



        DB::table('assign_news_categories')->insert([
            [
                'news_id' => '1',
                'news_category_id' => '1',
               
            ],

            [
                'news_id' => '1',
                'news_category_id' => '2',
               
            ],
           

            [
                'news_id' => '2',
                'news_category_id' => '2',
               
            ],
           


            [
                'news_id' => '3',
                'news_category_id' => '1',
               
            ],


            
            [
                'news_id' => '4',
                'news_category_id' => '1',
               
            ],
               
            [
                'news_id' => '4',
                'news_category_id' => '3',
               
            ],
           
           
        ]);




    }
}
