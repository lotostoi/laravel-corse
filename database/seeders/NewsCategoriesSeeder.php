<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news-categories')->insert($this->getcategories());
    }

    public function getcategories()
    {
        $faker = \Faker\Factory::create('en_En');

        $categories = [];

        for ($i = 0; $i < 8; $i++) {
            $index = 31 + $i;
            $categories[] = [
                'title' => $faker->sentence(rand(2, 3)),
                'img' => "/assets/img/plugs/{$index}.jpg",
            ];
        }

        return $categories;
    }
}
