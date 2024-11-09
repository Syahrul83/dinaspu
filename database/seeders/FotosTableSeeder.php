<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fotos')->delete();
        
        \DB::table('fotos')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'laptop ',
                'ket' => NULL,
                'image' => 'foto/01J2GB4K1418CXCAMQXZMGM7GQ.jpg',
                'created_at' => '2024-07-11 15:29:17',
                'updated_at' => '2024-07-11 15:29:17',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'HP jadul',
                'ket' => NULL,
                'image' => 'foto/01J2GB533ZXS94ZV2K51P4KFY1.jpg',
                'created_at' => '2024-07-11 15:29:34',
                'updated_at' => '2024-07-11 15:29:47',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'makanan',
                'ket' => NULL,
                'image' => 'foto/01J2GB66CXZ2QYMB1MN6BRFE3X.jpg',
                'created_at' => '2024-07-11 15:30:10',
                'updated_at' => '2024-07-11 15:30:10',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Meja',
                'ket' => 'Meja Komputer',
                'image' => 'foto/01J2GBQG3VGXPG5V7TRNY9ZYGZ.jpg',
                'created_at' => '2024-07-11 15:39:37',
                'updated_at' => '2024-07-11 16:57:20',
            ),
        ));
        
        
    }
}