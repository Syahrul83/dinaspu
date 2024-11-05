<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Peresmian Bendungan Sepaku Semoi',
                'link' => 'EoPnO25UE60',
                'ket' => 'Peresmian Bendungan Sepaku Semoi',
                'image' => 'video/01J40SZ3VRKG2HZTYSM3J3TKGH.jpg',
                'created_at' => '2024-07-11 17:44:49',
                'updated_at' => '2024-07-30 11:27:48',
            ),
        ));
        
        
    }
}