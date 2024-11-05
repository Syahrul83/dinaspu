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
                'gmap' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6743224809843!2d117.12008227496462!3d-0.48678859950844067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67fcf9c8c8335%3A0x86d26f67fd4d17c1!2sBalai%20Sungai%20Kalimantan%20IV%20Samarinda%20-%20KalTim!5e0!3m2!1sen!2sid!4v1720670392307!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'created_at' => '2024-07-03 07:08:36',
                'updated_at' => '2024-07-11 12:28:43',
            ),
        ));
        
        
    }
}