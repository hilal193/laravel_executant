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
                    "url"=>"inconnu.png"
                ],
                [
                    "nom"=>"admin",
                    // "url"=>"https://images2.alphacoders.com/100/thumb-350-1006947.png"
                    "url"=>"admin.png"
                ],
                [
                    "nom"=>"broly",
                    "url"=>"broly.png"
                    // "url"=>"https://level-1.fr/Principal/wp-content/uploads/2019/12/D1NLL_cXcAEvtQ8.jpg"
                ],
                [
                    "nom"=>"vegeta",
                    "url"=>"vegeta.jpg"
                ],
                [
                    "nom"=>"goku",
                    "url"=>"goku.png"
                ],
                [
                    "nom"=>"power ranger",
                    "url"=>"powerranger.jpg"
                ],
                [
                    "nom"=>"yusuke",
                    "url"=>"yusuke.jpg"
                ],
                [
                    "nom"=>"bulma",
                    "url"=>"bulma.jpg"
                ],

            ]);
    }
}
