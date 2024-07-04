<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super_admin',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 12:11:50',
                'updated_at' => '2024-07-04 12:11:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 12:12:27',
                'updated_at' => '2024-07-04 12:12:27',
            ),
        ));
        
        
    }
}