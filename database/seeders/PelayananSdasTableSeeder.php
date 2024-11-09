<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelayananSdasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pelayanan_sdas')->delete();
        
        \DB::table('pelayanan_sdas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Kilas Informasi',
                'file' => 'pelayanan_sda/01J2GT7K0TG5JNJYVVGNG65FBX.pdf',
                'created_at' => '2024-07-11 19:53:04',
                'updated_at' => '2024-07-11 19:53:04',
            ),
        ));
        
        
    }
}