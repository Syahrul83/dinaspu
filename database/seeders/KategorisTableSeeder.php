<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategoris')->delete();
        
        \DB::table('kategoris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Berita Terkini',
                'active' => 1,
                'created_at' => '2024-06-24 14:17:08',
                'updated_at' => '2024-07-01 13:56:54',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Informasi Seputar Zona Integritas',
                'active' => 1,
                'created_at' => '2024-07-01 13:56:26',
                'updated_at' => '2024-07-03 14:04:21',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Kilas Informasi',
                'active' => 1,
                'created_at' => '2024-07-01 13:57:04',
                'updated_at' => '2024-07-01 13:57:04',
            ),
        ));
        
        
    }
}