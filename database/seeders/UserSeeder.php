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
                // "avatar" => "https://images2.alphacoders.com/100/thumb-350-1006947.png",
                "avatar_id" => 1,

                "role_id" => 1,
                "email" => "testHilal@hotmail.com",
                "password" => Hash::make("testhilal"),
                "created_at" => now()

            ],
            [
                "name" => "broly",
                "prenom" => "DBS",
                "age" => 25,
                // "avatar" => "https://level-1.fr/Principal/wp-content/uploads/2019/12/D1NLL_cXcAEvtQ8.jpg",
                "avatar_id" => 2,

                "role_id" => 2,
                "email" => "broly@hotmail.com",
                "password" => Hash::make("broly"),
                "created_at" => now()

            ],
            [
                "name" => "vegeta",
                "prenom" => "DBZ",
                "age" => 35,
                // "avatar" => "http://www.fulguropop.com/wp-content/uploads/2021/10/sacrifice-vegeta-1.jpg",
                "avatar_id" => 3,

                "role_id" => 2,
                "email" => "vegeta@hotmail.com",
                "password" => Hash::make("vegeta"),
                "created_at" => now()

            ],
            [
                "name" => "goku",
                "prenom" => "DBZ",
                "age" => 30,
                // "avatar" => "https://img.joomcdn.net/5c9c5c888377540757da5cb016cabdfac832c0bb_original.jpeg",
                "avatar_id" => 4,

                "role_id" => 2,
                "email" => "sangoku@hotmail.com",
                "password" => Hash::make("sangoku"),
                "created_at" => now()

            ],
            [
                "name" => "luffy",
                "prenom" => "one piece",
                "age" => 18,
                // "avatar" => "https://cdn.radiofrance.fr/s3/cruiser-production/2021/09/72ef2607-ede5-46f5-9a57-a5a8b4620926/801x410_d-uwettw4aelhia.jpg",
                "avatar_id" => 5,

                "role_id" => 2,
                "email" => "luffy@hotmail.com",
                "password" => Hash::make("luffy"),
                "created_at" => now()

            ],
            [
                "name" => "yusuke",
                "prenom" => "yu yu hakusho",
                "age" => 28,
                // "avatar" => "https://i.pinimg.com/474x/83/98/47/8398470154135d4974a1fc77649b0803.jpg",
                "avatar_id" => 6,
                "role_id" => 2,
                "email" => "yusuke@hotmail.com",
                "password" => Hash::make("yusuke"),
                "created_at" => now()

            ],
            [
                "name" => "courage",
                "prenom" => "courage le chien froussard",
                "age" => 2,
                // "avatar" => "https://img.seriebox.com/series/8/8567/courage-the-cowardly-dog_1464092147.jpg",
                "avatar_id" => 7,

                "role_id" => 2,
                "email" => "courage@hotmail.com",
                "password" => Hash::make("courage"),
                "created_at" => now()

            ],

        ]);
    }
}
