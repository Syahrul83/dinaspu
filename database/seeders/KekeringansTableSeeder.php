<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KekeringansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kekeringans')->delete();
        
        \DB::table('kekeringans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'kekeriangan',
                'keterangan' => NULL,
                'file' => 'kekeringan/01J1W9QFWSNM96J0D9YTNJX4A5.pdf',
                'created_at' => '2024-07-03 12:39:51',
                'updated_at' => '2024-07-03 12:39:51',
            ),
        ));
        
        
    }
}