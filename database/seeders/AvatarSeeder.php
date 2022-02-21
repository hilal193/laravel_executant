<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([

                [
                    "nom"=>"defaut",
                    // "url"=>"https://image.shutterstock.com/image-vector/default-avatar-profile-icon-social-260nw-1677509740.jpg"
                    "url"=>"inconnu.png",
                    "created_at"=> now(),
                ],
                [
                    "nom"=>"admin",
                    // "url"=>"https://images2.alphacoders.com/100/thumb-350-1006947.png"
                    "url"=>"admin.png",
                    "created_at"=> now(),
                ],
                [
                    "nom"=>"broly",
                    "url"=>"broly.png",
                    "created_at"=> now(),
                    // "url"=>"https://level-1.fr/Principal/wp-content/uploads/2019/12/D1NLL_cXcAEvtQ8.jpg"
                ],
                [
                    "nom"=>"vegeta",
                    "url"=>"vegeta.jpg",
                    "created_at"=> now(),
                ],
                [
                    "nom"=>"goku",
                    "url"=>"goku.png",
                    "created_at"=> now(),
                ],
                [
                    "nom"=>"power ranger",
                    "url"=>"powerranger.jpg",
                    "created_at"=> now(),
                ],
                [
                    "nom"=>"yusuke",
                    "url"=>"yusuke.jpg",
                    "created_at"=> now(),
                ],
                [
                    "nom"=>"bulma",
                    "url"=>"bulma.jpg",
                    "created_at"=> now(),
                ],

            ]);
    }
}
