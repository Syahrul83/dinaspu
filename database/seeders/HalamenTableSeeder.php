<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HalamenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('halamen')->delete();
        
        \DB::table('halamen')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Visi Dan Misi',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:35:09',
                'updated_at' => '2024-06-30 13:35:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Tugas Dan Fungsi',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:49:24',
                'updated_at' => '2024-06-30 13:49:24',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Struktur Organisasi',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:49:47',
                'updated_at' => '2024-06-30 13:49:47',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Sejarah',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:50:14',
                'updated_at' => '2024-06-30 13:50:14',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Lokasi Kantor',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:50:38',
                'updated_at' => '2024-06-30 13:50:38',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'TKSPDA',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:56:24',
                'updated_at' => '2024-06-30 13:56:24',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Komunitas Peduli Sungai',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:56:43',
                'updated_at' => '2024-06-30 13:56:43',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Komisi Irigasi',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:57:11',
                'updated_at' => '2024-06-30 13:57:11',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'P3A',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:57:37',
                'updated_at' => '2024-06-30 13:57:37',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'GNKPA',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:57:58',
                'updated_at' => '2024-06-30 13:57:58',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Rekomtek SDA',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:01:15',
                'updated_at' => '2024-06-30 14:01:15',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Informasi Hidrologi',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:01:36',
                'updated_at' => '2024-06-30 14:01:36',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Informasi Irigasi dan Rawa',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:01:58',
                'updated_at' => '2024-06-30 14:01:58',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Informasi Bendungan dan Waduk',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:02:27',
                'updated_at' => '2024-06-30 14:02:27',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Informasi Bendung',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:02:47',
                'updated_at' => '2024-06-30 14:02:47',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Informasi Sungai',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:03:03',
                'updated_at' => '2024-06-30 14:03:03',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Informasi Danau',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:03:21',
                'updated_at' => '2024-06-30 14:03:21',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Informasi Sumur Dalam',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:03:39',
                'updated_at' => '2024-06-30 14:03:39',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Informasi Alokasi Air',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:03:55',
                'updated_at' => '2024-06-30 14:03:55',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'WebGIS BWS KIV-SMD',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:04:32',
                'updated_at' => '2024-06-30 14:04:32',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'SIH3 WS Mahakam',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:04:54',
                'updated_at' => '2024-06-30 14:04:54',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Laporan Bencana',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:05:09',
                'updated_at' => '2024-06-30 14:05:09',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Kinerja Balai',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-01 14:26:01',
                'updated_at' => '2024-07-01 14:26:01',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Pelayanan Perijinana',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-01 14:26:29',
                'updated_at' => '2024-07-01 14:26:29',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Pelayanan Data',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-01 14:26:42',
                'updated_at' => '2024-07-01 14:26:42',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Layanan Tata Keola InfraInfrastruktur SDA',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-01 14:27:32',
                'updated_at' => '2024-07-01 14:27:32',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Layanan Pengadaan Barang dan Jasa',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-01 14:27:54',
                'updated_at' => '2024-07-01 14:27:54',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Layanan Tanggap Darurat Paca Bencana',
                'slug' => NULL,
                'body' => NULL,
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-01 14:28:32',
                'updated_at' => '2024-07-01 14:28:32',
            ),
        ));
        
        
    }
}