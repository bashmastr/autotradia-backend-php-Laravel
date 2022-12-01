<?php

use Illuminate\Database\Seeder;

class DescriptionHelperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('description_helpers')->insert([
            [
                'name' => 'Bumper to Bumper',
                'description' => 'Inside out fully original'
            ],
            [
                'name' => 'Like New',
                'description' => 'Just like a Zero Meter car'
            ],
            [
                'name' => 'Original Book',
                'description' => 'Original book of this car is also available'
            ],
            [
                'name' => 'Price Negotiable',
                'description' => 'Price is slightly negotiable'
            ]
        ]);
    }
}
