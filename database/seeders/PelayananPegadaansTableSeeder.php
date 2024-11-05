<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelayananPegadaansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pelayanan_pegadaans')->delete();
        
        \DB::table('pelayanan_pegadaans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'dinas pu',
                'file' => 'pelayanan-pengadaan/01J2GT61CMB1XV0JSD8H0XH17M.pdf',
                'created_at' => '2024-07-11 19:52:14',
                'updated_at' => '2024-07-11 19:52:14',
            ),
        ));
        
        
    }
}