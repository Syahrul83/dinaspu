<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanjirsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banjirs')->delete();
        
        \DB::table('banjirs')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Banjir Tahunan',
                'file' => 'banjir/01J1WDS4RQ4F0S9X5WD8DM028N.pdf',
                'created_at' => '2024-07-03 13:50:39',
                'updated_at' => '2024-07-03 13:50:39',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Laporan banjir 2024',
                'file' => 'banjir/01J2G6WT34CTFQKVD3V2ZFS9T8.pdf',
                'created_at' => '2024-07-11 14:15:08',
                'updated_at' => '2024-07-11 14:15:08',
            ),
        ));
        
        
    }
}