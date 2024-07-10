<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$MGK9Xme9893kGm6sZ/dJ3uNaLMvIj5GkTa80G9kxNpSdB6sU2o4SG',
                'remember_token' => NULL,
                'created_at' => '2024-06-11 04:22:18',
                'updated_at' => '2024-06-11 04:22:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'valefour',
                'email' => 'syahrulanwar83@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$jkS/KNBRJmnATZQMutjDgugALoEnFHr1pg9qR25H0I4kjJKXL5PDy',
                'remember_token' => NULL,
                'created_at' => '2024-07-04 12:41:21',
                'updated_at' => '2024-07-04 12:41:21',
            ),
        ));
        
        
    }
}