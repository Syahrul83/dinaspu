<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'view_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'view_any_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'update_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'restore_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'restore_any_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'replicate_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'reorder_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'delete_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delete_any_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'force_delete_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'force_delete_any_banjir',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'view_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'view_any_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'create_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'update_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'restore_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:43',
                'updated_at' => '2024-07-04 11:06:43',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'restore_any_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'replicate_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'reorder_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'delete_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'delete_any_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'force_delete_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'force_delete_any_buku::data',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'view_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'view_any_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'create_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'update_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'restore_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'restore_any_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'replicate_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'reorder_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'delete_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'delete_any_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'force_delete_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'force_delete_any_foto',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'view_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'view_any_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'create_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'update_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'restore_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'restore_any_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'replicate_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'reorder_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'delete_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'delete_any_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'force_delete_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'force_delete_any_halaman',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'view_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'view_any_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'create_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'update_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'restore_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'restore_any_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'replicate_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'reorder_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'delete_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'delete_any_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'force_delete_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'force_delete_any_header',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'view_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'view_any_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'create_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'update_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'restore_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'restore_any_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'replicate_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'reorder_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'delete_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'delete_any_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'force_delete_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'force_delete_any_infografis',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'view_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'view_any_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'create_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'update_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'restore_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'restore_any_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'replicate_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'reorder_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'delete_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'delete_any_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'force_delete_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'force_delete_any_kategori',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'view_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'view_any_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'create_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'update_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'restore_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'restore_any_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'replicate_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'reorder_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'delete_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'delete_any_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'force_delete_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'force_delete_any_kekeringan',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'view_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'view_any_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'create_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'update_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'restore_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'restore_any_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'replicate_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'reorder_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'delete_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'delete_any_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'force_delete_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'force_delete_any_kontak',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'view_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'view_any_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'create_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'update_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'restore_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'restore_any_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'replicate_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'reorder_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'delete_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'delete_any_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'force_delete_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'force_delete_any_majalah::pesut',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'view_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'view_any_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'create_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'update_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'restore_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'restore_any_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'replicate_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'reorder_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'delete_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'delete_any_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'force_delete_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'force_delete_any_menu::link',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'view_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'view_any_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'create_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'update_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'restore_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'restore_any_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'replicate_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'reorder_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'delete_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'delete_any_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'force_delete_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:44',
                'updated_at' => '2024-07-04 11:06:44',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'force_delete_any_post',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'view_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'view_any_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'create_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'update_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'restore_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'restore_any_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'replicate_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'reorder_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'delete_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'delete_any_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'force_delete_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'force_delete_any_publiaksi::hidrologi',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'view_role',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'view_any_role',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'delete_role',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'delete_any_role',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'view_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'view_any_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'create_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'update_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'restore_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'restore_any_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'replicate_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'reorder_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'delete_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'delete_any_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'force_delete_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'force_delete_any_sda',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'view_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'view_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'create_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'update_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'restore_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'restore_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'replicate_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'reorder_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'delete_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'force_delete_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'force_delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'view_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'view_any_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'create_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'update_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'restore_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'restore_any_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'replicate_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'reorder_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'delete_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'delete_any_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'force_delete_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'force_delete_any_video',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'page_MenuOrder',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'widget_BlogPostsChart',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:45',
                'updated_at' => '2024-07-04 11:06:45',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'widget_KategoriChart',
                'guard_name' => 'web',
                'created_at' => '2024-07-04 11:06:46',
                'updated_at' => '2024-07-04 11:06:46',
            ),
        ));
        
        
    }
}