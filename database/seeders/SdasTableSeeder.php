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
                'title' => 'Dokumen Pola Pengelolaan Sumber Daya Air Wilayah Sungai Mahakam',
                'keterangan' => NULL,
                'file' => 'sda_file/01J4DGA85RC78H182RP9C69QHP.pdf',
                'created_at' => '2024-07-03 07:47:10',
                'updated_at' => '2024-08-04 09:33:26',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Dokumen Recana Pengelolaan Sumber Daya Air Wilayah Sungai Mahakam',
                'keterangan' => NULL,
                'file' => 'sda_file/01J4G3M3G6M4Z3FNBRYJZ9HYXW.pdf',
                'created_at' => '2024-07-03 07:47:55',
                'updated_at' => '2024-08-05 09:49:21',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Dokumen Sebaran Perijinan Sumber Daya Air Wilayah Sungai Mahakam',
                'keterangan' => NULL,
                'file' => 'sda_file/01J2G4WMBMK7XY28CQ7T0KX30X.pdf',
                'created_at' => '2024-07-03 07:48:26',
                'updated_at' => '2024-07-11 13:40:05',
            ),
        ));
        
        
    }
}