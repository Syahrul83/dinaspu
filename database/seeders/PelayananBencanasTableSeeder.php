<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelayananBencanasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pelayanan_bencanas')->delete();
        
        \DB::table('pelayanan_bencanas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Berita Balai',
                'file' => 'pelayanan_bencana/01J2GT6WVBQYBT0J2M7PX9WZZX.pdf',
                'created_at' => '2024-07-11 19:52:42',
                'updated_at' => '2024-07-11 19:52:42',
            ),
        ));
        
        
    }
}