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
                    "url"=>"https://image.shutterstock.com/image-vector/default-avatar-profile-icon-social-260nw-1677509740.jpg"
                ],
                [
                    "nom"=>"admin",
                    "url"=>"https://images2.alphacoders.com/100/thumb-350-1006947.png"
                ],
                [
                    "nom"=>"broly",
                    "url"=>"https://level-1.fr/Principal/wp-content/uploads/2019/12/D1NLL_cXcAEvtQ8.jpg"
                ],
                [
                    "nom"=>"vegeta",
                    "url"=>"http://www.fulguropop.com/wp-content/uploads/2021/10/sacrifice-vegeta-1.jpg"
                ],
                [
                    "nom"=>"goku",
                    "url"=>"https://img.joomcdn.net/5c9c5c888377540757da5cb016cabdfac832c0bb_original.jpeg"
                ],
                [
                    "nom"=>"luffy",
                    "url"=>"https://cdn.radiofrance.fr/s3/cruiser-production/2021/09/72ef2607-ede5-46f5-9a57-a5a8b4620926/801x410_d-uwettw4aelhia.jpg"
                ],
                [
                    "nom"=>"yusuke",
                    "url"=>"https://i.pinimg.com/474x/83/98/47/8398470154135d4974a1fc77649b0803.jpg"
                ],
                [
                    "nom"=>"courage",
                    "url"=>"https://img.seriebox.com/series/8/8567/courage-the-cowardly-dog_1464092147.jpg"
                ],
            
            ]);
    }
}
