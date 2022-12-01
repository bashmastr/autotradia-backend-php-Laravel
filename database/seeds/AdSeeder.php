<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // status 0 = pending, 1 = active, 2 = removed


            DB::table('ads')->insert([
                [
                    'user_id' => 1,
                    'name' => 'Hond Civic Bej Raha Ho Bahi',
                    'slug' => 'hond-civic-bej-raha-ho-bahi',
                    'price' => '1200000',
                    'phone' =>'03254695',
                    'available_city' => 'KPK',
                    'description' => 'Hello Dear Pakistani, as we all are aware of todays cars market prices. so thats why i just want to sell my car in a very high price.. you dont how lovely this car is .. let me know if you are interested in buying my car. ',
                    'featured_image' => 'car_feature.png',
                    'status' => 1,
                    'updated_at' => Carbon::Now()
                ],
            ]);
            DB::table('ad_car_features')->insert([
                [
                    'ad_id' => 1,
                    'car_feature_id' => 2,
                    'status' => 1,
                ],
                [
                    'ad_id' => 1,
                    'car_feature_id' => 4,
                    'status' => 1,
                ],
                [
                    'ad_id' => 1,
                    'car_feature_id' => 5,
                    'status' => 1,
                ],
            ]);
            DB::table('ad_categories')->insert([
                [
                    'ad_id' => 1,
                    'category_id' => 2,
                ],
            ]);
            DB::table('ad_galleries')->insert([
                [
                    'ad_id' => 1,
                    'image' => 'car_rest.jpg',
                ],
                [
                    'ad_id' => 1,
                    'image' => 'car_rest.jpg',
                ],
                [
                    'ad_id' => 1,
                    'image' => 'car_rest.jpg',
                ],
            ]);
            DB::table('car_details')->insert([
                [
                    'ad_id' => 1,
                    'car_model' => '2006',
                    'company' => 'Honda',
                    'car_color' => 'White',
                    'milage' => '1500',
                    'fuel_type' => 'Petrol',
                    'condition' => 'Used',
                    'transmission' => 'Automatic',
                    'engine' => '1600cc',
                    'year' => '2020',
                    'registeration_no' => '9099',
                    'registeration_city' => 'ISB',
                ],
            ]);






            //second ad





            DB::table('ads')->insert([
                [
                    'user_id' => 2,
                    'name' => 'Toyota Corolla New Shape 2020',
                    'slug' => 'toyota-corolla-new-shape-2020',
                    'price' => '3200000',
                    'phone' =>'03489523659',

                    'available_city' => 'ISB',
                    'description' => 'Hello Dear Pakistani, as we all are aware of todays cars market prices. so thats why i just want to sell my car in a very high price.. you dont how lovely this car is .. let me know if you are interested in buying my car. ',
                    'featured_image' => 'car_feature.png',
                    'status' => 1,
                    'updated_at' => Carbon::Now()
                ],
            ]);
            DB::table('ad_car_features')->insert([
                [
                    'ad_id' => 2,
                    'car_feature_id' => 2,
                    'status' => 1,
                ],
                [
                    'ad_id' => 2,
                    'car_feature_id' => 4,
                    'status' => 1,
                ],
                [
                    'ad_id' => 2,
                    'car_feature_id' => 5,
                    'status' => 1,
                ],
            ]);
            DB::table('ad_categories')->insert([
                [
                    'ad_id' => 2,
                    'category_id' => 2,
                ],
            ]);
            DB::table('ad_galleries')->insert([
                [
                    'ad_id' => 2,
                    'image' => 'car_rest.jpg',
                ],
                [
                    'ad_id' => 2,
                    'image' => 'car_rest.jpg',
                ],
                [
                    'ad_id' => 2,
                    'image' => 'car_rest.jpg',
                ],
            ]);
            DB::table('car_details')->insert([
                [
                    'ad_id' => 2,
                    'car_model' => '2020',
                    'company' => 'Toyota',
                    'car_color' => 'White',
                    'milage' => '1800',
                    'fuel_type' => 'Petrol',
                    'condition' => 'Used',
                    'transmission' => 'Manual',
                    'engine' => '1600cc',
                    'registeration_no' => '1235',
                    'year' => '2020',
                    'registeration_city' => 'ISB',
                ],
            ]);


    }
}
