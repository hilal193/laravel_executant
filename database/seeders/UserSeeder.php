<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "koujil",
                "prenom" => "hilal",
                "age" => 15,
                "avatar" => "https://images2.alphacoders.com/100/thumb-350-1006947.png",
                "role_id" => 1,
                "email" => "testHilal@hotmail.com",
                "password" => Hash::make("testhilal"),
                "created_at" => now()

            ],
            [
                "name" => "broly",
                "prenom" => "DBS",
                "age" => 25,
                "avatar" => "https://static.wikia.nocookie.net/dragonball/images/b/b1/Broly_%28DBS%29.png/revision/latest/top-crop/width/360/height/450?cb=20181201004008&path-prefix=fr",
                "role_id" => 2,
                "email" => "broly@hotmail.com",
                "password" => Hash::make("broly"),
                "created_at" => now()

            ],

        ]);
    }
}
