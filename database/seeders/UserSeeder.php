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
            "name" => "koujil",
            "prenom" => "hilal",
            "age" => 15,
            "avatar" => "https://images2.alphacoders.com/100/thumb-350-1006947.png",
            "role_id" => 1,
            "email" => "testHilal@hotmail.com",
            "password" => Hash::make("testhilal"),
            "created_at" => now()
        ]);
    }
}
