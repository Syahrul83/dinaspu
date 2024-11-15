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
                'body' => '<p>Visi Kementerian Pekerjaan Umum dan Perumahan Rakyat dapat dirumuskan sebagai berikut :</p>
<p>Sebagaimana ditetapkan pada Peraturan Menteri PUPR Nomor 23/PRT/M/2020 tentang Rencana Strategis Kementerian PUPR 2020-2024, visi Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR) adalah sebagai berikut :<br>&ldquo;Kementerian Pekerjaan Umum dan Perumahan Rakyat yang Andal, Responsif, Inovatif dan Profesional dalam Pelayanan Kepada Presiden dan Wakil Presiden untuk Mewujudkan Visi dan Misi Presiden dan Wakil Presiden&rdquo;</p>
<p>Dalam rangka mewujudkan visi tersebut, sebagai penjabarannya dituangkan dalam bentuk misi yang dapat memberikan arah, tujuan yang ingin dicapai dan memberikan fokus terhadap program yang akan dilaksanakan serta untuk menumbuhkan partisipasi semua pihak.</p>
<h2><strong>%</strong></h2>
<p>Pencapaian visi tersebut dilaksanakan melalui pelaksanaan misi Presiden dan Wakil Presiden, sebagai berikut: :</p>
<p>Memberikan dukungan teknis dan administratif serta analisis yang cepat, akurat, dan responsif kepada Presiden dan Wakil Presiden dalam pengambilan dan pelaksanaan kebijakan pembangunan serta penyelenggaraan infrastruktur Pekerjaan Umum dan Perumahan Rakyat;<br>Memberikan dukungan teknis dan administratif kepada Presiden dalam menyelenggarakan pembangunan infrastruktur sumber daya air, konektivitas, perumahan dan permukiman dalam suatu pengembangan infrastruktur wilayah yang terpadu;<br>Menyelenggarakan pelayanan yang efektif dan efisien di bidang tata kelola, perencanaan, pengawasan, informasi, dan hubungan kelembagaan;<br>Meningkatkan kualitas sumber daya manusia, penyelenggaraan jasa konstruksi, dan pembiayaan infrastruktur dalam mendukung penyelenggaraan infrastruktur Pekerjaan Umum dan Perumahan Rakyat.</p>',
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:35:09',
                'updated_at' => '2024-08-04 09:30:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Tugas Dan Fungsi',
                'slug' => NULL,
                'body' => '<p><strong>Balai Wilayah Sungai Kalimantan IV Samarinda</strong>&nbsp;mempunyai tugas melaksanakan pengelolaan sumber daya air di wilayah sungai yang meliputi penyusunan program, pelaksanaan konstruksi, operasi dan pemeliharaan dalam rangka konservasi dan pendayagunaan sumber daya air dan pengendalian daya rusak air pada sungai, pantai, bendungan, danau, situ, embung, dan tampungan air lainnya, irigasi, rawa, tambak, air tanah, dan air baku serta pengelolaan drainase utama perkotaan</p>
<p>Dalam melaksanakan tugas&nbsp;<strong>Balai Wilayah Sungai Kalimantan IV Samarinda</strong>&nbsp;menyelenggarakan fungsi:</p>
<ol>
<li>Penyusunan pola pengelolaan sumber daya air dan rencana pengelolaan sumber daya air pada wilayah sungai;</li>
<li>Penyusunan program pengelolaan sumber daya air dan rencana kegiatan pengelolaan sumber daya air pada wilayah sungai;</li>
<li>Fasilitasi pengadaan barang dan jasa;</li>
<li>Pemantauan dan evaluasi penyelenggaraan atau penerapan pola pengelolaan sumber daya air dan rencana pengelolaan sumber daya air;</li>
<li>Penyusunan studi kelayakan dan perencanaan teknis, desain, dan pengembangan sumber daya air;</li>
<li>Pelaksanaan pengadaan barang dan jasa sesuai dengan ketentuan peraturan perundang-undangan;</li>
<li>Pelaksanaan penerapan sistem pengendalian intern pemerintah dan sistem manajemen keselamatan dan kesehatan kerja;</li>
<li>Pengelolaan sumber daya air yang meliputi konservasi sumber daya air, pendayagunaan sumber daya air, dan pengendalian daya rusak air pada wilayah sungai;</li>
<li>Pengelolaan drainase utama perkotaan;</li>
<li>Pengelolaan sistem hidrologi;</li>
<li>Pengelolaan sistem informasi sumber daya air;</li>
<li>Pelaksanaan operasi dan pemeliharaan sumber daya air pada wilayah sungai; 12. pelaksanaan bimbingan teknis pengelolaan sumber daya air yang menjadi kewenangan provinsi dan kabupaten/kota;</li>
<li>Penyusunan dan penyiapan rekomendasi teknis dalam pemberian izin penggunaan sumber daya air dan izin pengusahaan sumber daya air pada wilayah sungai;</li>
<li>Penyusunan saran teknis untuk pengalihan alur sungai dan pemanfaatan bekas sungai;</li>
<li>Penyusunan dan pelaksanaan kajian penetapan garis sempandan sungai, garis sempadan danau, garis sempadan situ, dan garis sempadan jaringan irigasi;</li>
<li>pemberdayaan masyarakat dalam pengelolaan sumber daya air;</li>
<li>Pelaksanaan penyusunan laporan akuntansi keuangan dan akuntansi barang milik negara selaku unit akuntansi wilayah;</li>
<li>Pelaksanaan pemungutan, penerimaan dan penggunaan biaya jasa pengelolaan sumber daya air sesuai dengan ketentuan peraturan perundangundangan;</li>
<li>Pelaksanaan urusan tata usaha dan rumah tangga balai serta komunikasi publik;</li>
<li>Penyusunan perjanjian kinerja dan laporan kinerja Balai; dan</li>
<li>Pelaksanaan pemantauan dan pengawasan penggunaan sumber daya air dan penyidikan tindak pidana bidang sumber daya air.</li>
</ol>',
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:49:24',
                'updated_at' => '2024-07-11 10:50:18',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Struktur Organisasi',
                'slug' => NULL,
                'body' => NULL,
                'image' => 'halaman/01J3KTMJ4EP5EVNHJV394WQJER.jpg',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:49:47',
                'updated_at' => '2024-07-25 10:13:34',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Sejarah',
                'slug' => NULL,
            'body' => '<p><span style="font-size: 12pt;"><span lang="id" style="font-family: Arial, sans-serif;">Balai Wilayah Sungai (BWS) Kalimantan IV sebagai unit pelaksana teknis dibawah Direktorat Jenderal Sumber Daya Air, Kementerian Pekerjaan Umum dan Perumahan Rakyat mempunyai tugas melaksanakan pengelolaan sumber daya air pada wilayah sungai dengan melaksanakan konservasi, pendayagunaan sumber daya air dan pengendalian daya rusak air pada sungai, pantai, bendungan, danau dan embung,<span style="letter-spacing: .05pt;"> </span><span style="color: black; mso-themecolor: text1;">Wilayah Sungai yang menjadi wilayah kerja BWS Kalimantan IV adalah Wilayah Sungai Mahakam</span></span>.</span></p>
<p><span lang="id" style="font-size: 12pt; font-family: Arial, sans-serif;">Pengelolaan Sumber Daya Air Wilayah Sungai (WS) dilakukan dengan berpedoman pada Dokumen Pola Pengelolaan SDA WS Mahakam, Rencana Pengelolaan SDA WS Mahakam. Wilayah Sungai (WS) Mahakam sesuai dengan Peraturan Menteri Pekerjaan Umum dan Perumahan Rakyat Nomor 04/PRT/M/2015 tentang Kriteria dan Penetapan Wilayah Sungai merupakan wilayah sungai lintas provinsi, yaitu meliputi Provinsi Kalimantan Timur, Provinsi Kalimantan Utara, Provinsi Kalimantan Tengah, dan Provinsi Kalimantan Barat</span>.</p>
<p><img src="//storage/uploads/AnFdimyPPrN1K1kl0eGGqmfKLBJCK8o7AFj4yktJ.jpg" alt="Sejarah Nomenklatur" width="719" height="406"></p>',
                'image' => NULL,
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 13:50:14',
                'updated_at' => '2024-07-25 10:37:29',
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
                'image' => 'halaman/01JCJVCZ305SDBJRW0KJ7VEXHG.jpg',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:01:15',
                'updated_at' => '2024-11-13 21:28:56',
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
                'image' => 'halaman/01JCJW25BRKEKWCCZS9BE9VKW8.jpg',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:03:55',
                'updated_at' => '2024-11-13 21:40:31',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'WebGIS BWS KIV-SMD',
                'slug' => NULL,
                'body' => NULL,
                'image' => 'halaman/01JCJVZMNN1X3ER0TMB8CSRCJ0.jpg',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:04:32',
                'updated_at' => '2024-11-13 21:39:08',
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
                'title' => 'Laporan Bencana BWS KIV SMD',
                'slug' => NULL,
                'body' => NULL,
                'image' => 'halaman/01JCJX08T47JAVCK4VEWJPKXYF.jpg',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-06-30 14:05:09',
                'updated_at' => '2024-11-13 21:56:57',
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