<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_links')->delete();
        
        \DB::table('menu_links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'L.A.P.O.R.!',
                'link' => NULL,
                'created_at' => '2024-07-01 14:06:50',
                'updated_at' => '2024-07-01 14:06:50',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'E-GRATIFIKASI',
                'link' => NULL,
                'created_at' => '2024-07-01 14:07:48',
                'updated_at' => '2024-07-01 14:07:48',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'WISTELE BLOWING SISTEM',
                'link' => NULL,
                'created_at' => '2024-07-01 14:08:14',
                'updated_at' => '2024-07-01 14:08:14',
            ),
        ));
        
        
    }
}