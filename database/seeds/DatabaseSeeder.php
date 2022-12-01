<?php


use App\Models\News;
use App\Models\User;
use App\Models\Event;

use App\Models\Category;

use App\Models\NewsCategory;
use App\Models\EventCategory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create();
       $this->call([
        CarFeatureSeeder::class,
        DescriptionHelperSeeder::class,
        RoleSeeder::class,
        PermissionSeeder::class,
        SocialMediaSeeder::class,
        CategorySeeder::class,
        EventCategorySeeder::class,
        EventSeeder::class,
        NewsCategorySeeder::class,
        NewsSeeder::class,
        LegalPages::class,
        UserSeeder::class,
        Packages::class,
        CarDropdowns::class,
        AdSeeder::class,
        
        
        ]);
         // factory(User::class,10)->create();
        // factory(Category::class,10)->create();
        // factory(EventCategory::class,10)->create();
        // // factory(Event::class,10)->create();
        // factory(NewsCategory::class,10)->create();
        // factory(News::class,10)->create();
    }
}
