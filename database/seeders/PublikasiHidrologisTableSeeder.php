<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublikasiHidrologisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publikasi_hidrologis')->delete();
        
        \DB::table('publikasi_hidrologis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'publikasi',
                'keterangan' => NULL,
                'file' => 'hidrologi/01J1W9T7T5HF07FJ6X0FR5K44E.pdf',
                'created_at' => '2024-07-03 12:41:21',
                'updated_at' => '2024-07-03 12:41:21',
            ),
        ));
        
        
    }
}