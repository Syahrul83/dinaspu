<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeadersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('headers')->delete();
        
        \DB::table('headers')->insert(array (
            0 => 
            array (
                'id' => 7,
                'title' => 'Bendungan Sepaku Semoi',
                'image' => 'web-header/01J3KSPMZJH6BJ5W8C87KAG6TF.JPG',
                'created_at' => '2024-07-25 09:57:14',
                'updated_at' => '2024-07-25 09:57:14',
            ),
            1 => 
            array (
                'id' => 9,
                'title' => 'Intake Sepaku',
                'image' => 'web-header/01J3M0CGSEQW7WG385R2YE2FBZ.jpg',
                'created_at' => '2024-07-25 11:54:02',
                'updated_at' => '2024-07-25 11:54:02',
            ),
            2 => 
            array (
                'id' => 10,
                'title' => 'Bendungan Samboja',
                'image' => 'web-header/01J3M0JXXD723AN6B58E99N44R.jpg',
                'created_at' => '2024-07-25 11:57:32',
                'updated_at' => '2024-07-25 11:57:32',
            ),
        ));
        
        
    }
}