<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BukuDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buku_data')->delete();
        
        \DB::table('buku_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'data buku',
                'keterangan' => NULL,
                'file' => 'BukuData/01J1W9SC0QX8MH4HSR1794ZTG9.pdf',
                'created_at' => '2024-07-03 12:40:53',
                'updated_at' => '2024-07-03 12:40:53',
            ),
        ));
        
        
    }
}