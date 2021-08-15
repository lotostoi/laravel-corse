<?php

namespace Database\Seeders;

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
        (new UsersSeeder())->run();
        (new NewsCategoriesSeeder())->run();
        (new NewsSeeder())->run();
        (new ConectionsNewsAndCatigoriesSeeder())->run();
    }
}
