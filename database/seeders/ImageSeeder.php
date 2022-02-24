<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("images")->insert([
            [
                "nom"=>"one piece",
                "url"=>"manga_1.png",
                "categorie_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"bleach",
                "url"=>"manga_2.jpg",
                "categorie_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"cartoon network",
                "url"=>"cartoon_.jpg",
                "categorie_id"=>2,
                "created_at"=>now(),
            ],
            [
                "nom"=>"pierre a feu",
                "url"=>"dessin_.jpg",
                "categorie_id"=>3,
                "created_at"=>now(),
            ],
        ]);
    }
}
