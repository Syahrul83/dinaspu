<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KontaksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kontaks')->delete();
        
        \DB::table('kontaks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Balai Wilayah Sungai Kalimantan IV Samarinda',
                'alamat' => 'Kantor BWS Kalimantan IV <br> Samarinda JL. MT. Haryono No. 36, Kota Samarinda, Kalimantan Timur - Indonesia - 75123',
                'email' => 'bws.kalimantan.iv.samarinda@pu.go.id',
            'no_hp' => '(0541) 2088390',
                'sda_tv' => NULL,
                'twitter' => NULL,
                'youtube' => NULL,
                'instagram' => NULL,
                'gmap' => NULL,
                'created_at' => '2024-07-03 07:08:36',
                'updated_at' => '2024-07-03 07:08:36',
            ),
        ));
        
        
    }
}