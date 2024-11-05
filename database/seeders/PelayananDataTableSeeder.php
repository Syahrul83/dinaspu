<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelayananDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pelayanan_data')->delete();
        
        \DB::table('pelayanan_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Kilas Informasi',
                'file' => 'pelayanan_data/01J2GT872NBQBMBX445FHZM28M.pdf',
                'created_at' => '2024-07-11 19:53:25',
                'updated_at' => '2024-07-11 19:53:25',
            ),
        ));
        
        
    }
}