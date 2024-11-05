<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InfografisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('infografis')->delete();
        
        \DB::table('infografis')->insert(array (
            0 => 
            array (
                'id' => 6,
                'title' => 'Zona Integritas',
                'image' => 'slider-infografis/01J40TBDQA27MBVTSA690QP2BJ.jpg',
                'link' => 'Zona Integritas',
                'created_at' => '2024-07-30 11:18:43',
                'updated_at' => '2024-07-30 11:20:07',
            ),
            1 => 
            array (
                'id' => 7,
                'title' => 'Zona Integritas 2',
                'image' => 'slider-infografis/01J40TTET2KHX111WZFQ3VVVS8.jpg',
                'link' => NULL,
                'created_at' => '2024-07-30 11:26:55',
                'updated_at' => '2024-07-30 11:26:55',
            ),
            2 => 
            array (
                'id' => 8,
                'title' => 'Zona Integritas 3',
                'image' => 'slider-infografis/01J40V9BXFA259PSCGTNJK29RR.jpg',
                'link' => NULL,
                'created_at' => '2024-07-30 11:35:04',
                'updated_at' => '2024-07-30 11:35:04',
            ),
            3 => 
            array (
                'id' => 9,
                'title' => 'Maklumat Pelayanan',
                'image' => 'slider-infografis/01J57RM71E1FMEGWWDARSAPV4F.JPG',
                'link' => NULL,
                'created_at' => '2024-08-14 14:18:56',
                'updated_at' => '2024-08-14 14:18:56',
            ),
        ));
        
        
    }
}