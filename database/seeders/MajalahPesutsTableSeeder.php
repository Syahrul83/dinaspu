<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MajalahPesutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('majalah_pesuts')->delete();
        
        \DB::table('majalah_pesuts')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Majalah SISDA Edisi 1',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J3KR6MME18A67ZB2RPYAC60Q.pdf',
                'created_at' => '2024-07-25 09:31:01',
                'updated_at' => '2024-07-25 09:31:01',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Majalah PESUT Edisi 2',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G8363XWXWQSG8FFW5GEBC6.pdf',
                'created_at' => '2024-08-05 11:07:29',
                'updated_at' => '2024-08-05 11:07:29',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Majalah PESUT Edisi 3',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G9QVE4DBYMXPNEXG4WF80N.pdf',
                'created_at' => '2024-08-05 11:36:15',
                'updated_at' => '2024-08-05 11:36:15',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Majalah PESUT Edisi 4',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G9RCFYNTWYMN2N5WFRBCCK.pdf',
                'created_at' => '2024-08-05 11:36:33',
                'updated_at' => '2024-08-05 11:36:33',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Majalah PESUT Edisi 5',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G9RTC2R89B5QJ8MRVH45GA.pdf',
                'created_at' => '2024-08-05 11:36:47',
                'updated_at' => '2024-08-05 11:36:47',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Majalah PESUT Edisi 6',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G9SB8TB63J5E2K27MW5N9Y.pdf',
                'created_at' => '2024-08-05 11:37:04',
                'updated_at' => '2024-08-05 11:37:04',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Majalah PESUT Edisi 7',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G9W4RWDXTCXAKEZDDTC5XS.pdf',
                'created_at' => '2024-08-05 11:38:36',
                'updated_at' => '2024-08-05 11:38:36',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Majalah PESUT Edisi 8',
                'keterangan' => NULL,
                'file' => 'majalah_pesut/01J4G9ZWEC74M8ZMPQJYZQTVTD.pdf',
                'created_at' => '2024-08-05 11:40:38',
                'updated_at' => '2024-08-05 11:40:38',
            ),
        ));
        
        
    }
}