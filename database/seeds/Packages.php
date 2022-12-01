<?php

use Illuminate\Database\Seeder;

class Packages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('packages')->insert([
            [
                'name' => 'Basic',
                'slug' => 'basic',
                'durations' => '3',
                'price' => '500',
                'max_ads' => '5',
                'picture' => 'Pot2.svg',
                'sale_price' => 'NULL',
                'description' => 'A simple start for everyone',
                'status' => '1',
            ],


            [
                'name' => 'Standard',
                'slug' => 'standard',
                'durations' => '3',
                'price' => '800',
                'max_ads' => '8',
                'picture' => 'Pot2.svg',
                'sale_price' => 'NULL',
                'description' => 'For small to medium dealers',
                'status' => '1',
            ],


            [
                'name' => 'Enterprise',
                'slug' => 'enterprise',
                'durations' => '5',
                'price' => '1000',
                'max_ads' => '10',
                'picture' => 'Pot2.svg',
                'sale_price' => 'NULL',
                'description' => 'Solution for big organizations',
                'status' => '1',
            ],

           
        ]);


    }
}
