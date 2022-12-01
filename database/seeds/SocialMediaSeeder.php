<?php

use App\Models\SocialLink;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_links')->insert([
            [   'name' => 'facebook',
                'slug' => 'facebook',
                'link' => 'facebook',
            ],
            [
                'name' => 'instagram',
                'slug' => 'instagram',
                'link' => 'instagram',
            ],
            [
                'name' => 'twitter',
                'slug' => 'twitter',
                'link' => 'twitter',
            ]
        ]);
    }
}
