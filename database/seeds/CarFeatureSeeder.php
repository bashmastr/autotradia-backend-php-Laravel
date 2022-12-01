<?php

use App\Models\CarFeature;
use Illuminate\Database\Seeder;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            'ABS',
            'Air Bags',
            'Air Conditioning',
            'Alloy Rims',
            'AM/FM Radio',
            'CD Player',
            'Cassette Player',
            'Cool Box',
            'Cruise Control',
            'Climate Control',
            'DVD Player',
            'Front Speakers',
            'Front Camera',
            'Heated Seats',
            'Immobilizer Key',
            'Keyless Entry',
            'Navigation System',
            'Power Locks',
            'Power Mirrors',
            'Power Steering',
            'Power Windows',
            'Rear Seat Entertainment',
            'Rear AC Vents',
            'Rear speakers',
            'Rear Camera',
            'Sun Roof',
            'Steering Switches',
            'USB and Auxillary Cable'
        ];

        foreach ($features as $feature) {
            CarFeature::create(['name' => $feature]);
        }
    }
}
