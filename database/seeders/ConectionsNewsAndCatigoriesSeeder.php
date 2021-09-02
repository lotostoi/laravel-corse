<?php

namespace Database\Seeders;

use App\Models\BlogNew;
use App\Models\NewCategory;
use Illuminate\Database\Seeder;

class ConectionsNewsAndCatigoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('conections-news-and-categories')->insert($this->getData());
    }

    public function getData()
    {
        $faker = \Faker\Factory::create('en_En');

        $data = [];

        
        $newsIds = BlogNew::all()->keyBy('id')->all();
        $categoriesIds = NewCategory::all()->keyBy('id')->all();

        $array = [];

        for ($i = 1; $i <= count($categoriesIds); $i++) {
            $array[] = $i;
        }

        foreach ($newsIds as $id) {
            $count = rand(1, 6);
            $newArray = $array;
            for ($i = 1; $i <= $count; $i++) {
                $new_category_id = array_splice($newArray, rand(0, count($newArray) - 1),1)[0];
                $data[] = [
                    'new_id' => (int) $id->id,
                    'new_category_id' => (int) $new_category_id,
                ];
            }
        }
        return $data;
    }
}
