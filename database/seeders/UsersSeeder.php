<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert($this->getNews());
    }

    public function getNews()
    {
        $faker = \Faker\Factory::create('en_En');

        $news = [];

        for ($i = 0; $i < 20; $i++) {

            $news[] = [
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
                'logo' => "https://png.pngtree.com/template/20190428/ourlarge/pngtree-blue-samurai-esports-logo-for-mascot-gaming-image_145369.jpg",
            ];
        }

        return $news;
    }
}
