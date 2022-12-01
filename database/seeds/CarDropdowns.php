<?php

use Illuminate\Database\Seeder;

class CarDropdowns extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('car_detail_dropdowns')->insert([
            [   'make' => 'Honda',
                'model' => 'Civic,Reborn,City',
                'year' => '2020,2019,2018,2017',
            ],

            [ 
                'make' => 'Toyota',
                'model' => 'Corolla,GLI,XLI',
                'year' => '2021,2020,2019,2017',
            ],


            [ 
                'make' => 'Mecerdes',
                'model' => 'Mercedes S-Class,Mercedes E-Class',
                'year' => '2021,2019',
            ],
       
        ]);


    }
}
