<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getNews());
    }

    public function getNews()
    {
        $faker = \Faker\Factory::create('en_En');

        $news = [];

        for ($i = 0; $i < 30; $i++) {

            $news[] = [
                'title' => $faker->sentence(rand(2, 15)),
                'content' => $faker->realText(rand(100, 300)),
                'img' => "/assets/img/plugs/{$i}.jpg",
            ];
        }

        return $news;
    }
}
