<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelayananPerijinansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pelayanan_perijinans')->delete();
        
        \DB::table('pelayanan_perijinans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'L.A.P.O.R.!',
                'file' => 'pelayanan_perijinan/01J2GT99AA7E5K0X01B1H7WRQ4.pdf',
                'created_at' => '2024-07-11 19:54:00',
                'updated_at' => '2024-07-11 19:54:00',
            ),
        ));
        
        
    }
}