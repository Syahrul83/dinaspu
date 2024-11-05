<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KinerjaBalaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kinerja_balais')->delete();
        
        \DB::table('kinerja_balais')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Berita Balai',
                'file' => 'kinerja_balai/01J2GT9YJ1DB8VS1VHAKWZHQQ3.pdf',
                'created_at' => '2024-07-11 19:54:22',
                'updated_at' => '2024-07-11 19:54:22',
            ),
        ));
        
        
    }
}