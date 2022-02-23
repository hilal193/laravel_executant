<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                "src" => "article_1.jpg",
                "auteur" => "HilalTest",
                'titre' => 'nom de larticle',
                'description' => 'Lorem lorem lorem ipsum lorem ipsum',
                'created_at' => now(),
            ],
            [
                "src" => "article_2.jpg",
                "auteur" => "Hilal",
                'titre' => 'joli titre',
                'description' => 'Lorem lorem lorem ipsum lorem ipsum',
                'created_at' => now(),
            ],
        ]);
    }
}
