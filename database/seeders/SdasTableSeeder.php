<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SdasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sdas')->delete();
        
        \DB::table('sdas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Pola Wilayah Sungai',
                'keterangan' => NULL,
                'file' => 'sda_file/01J1WDN12YQY0V6PGZSCEFD425.pdf',
                'created_at' => '2024-07-03 07:47:10',
                'updated_at' => '2024-07-03 13:48:25',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Rencana RSDA Wilayah Sungai',
                'keterangan' => NULL,
                'file' => 'sda_file/01J1WDPX6C9DQRVMRF2D7V3T6E.pdf',
                'created_at' => '2024-07-03 07:47:55',
                'updated_at' => '2024-07-03 13:49:26',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Sebaran Perijinan SDA',
                'keterangan' => NULL,
                'file' => NULL,
                'created_at' => '2024-07-03 07:48:26',
                'updated_at' => '2024-07-03 07:48:26',
            ),
        ));
        
        
    }
}