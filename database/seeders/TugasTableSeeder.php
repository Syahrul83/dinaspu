<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TugasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tugas')->delete();
        
        \DB::table('tugas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Kepala Balai',
                'body' => '<p><strong>Tugas</strong><br>Memberikan pelayanan teknis dan administratif kepada seluruh unsur organisasi di lingkungan direktorat jenderal sumber daya air.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Pemberian bimbingan teknis dan supervisi dalam penyusunan laporan akuntansi dan laporan barang milik negara;</li>
<li>Pelaksanaan administrasi perbendaharaan dan pengelolaan penerimaan negara bukan pajak;</li>
<li>Pengelolaan barang milik negara di lingkungan direktorat jenderal;</li>
<li>Pelaksanaan koordinasi administrasi kebencanaan;</li>
<li>Pelaksanaan koordinasi dan penyusunan peraturan perundang-undangan, fasilitasi advokasi hukum serta penyelenggaraan komunikasi publik direktorat jenderal;</li>
<li>Pelaksanaan pembinaan urusan kepegawaian, organisasi, dan tata laksana, serta reformasi birokrasi;</li>
<li>Pelaksanaan penyusunan laporan sistem pengendalian intern pemerintah di lingkungan direktorat jenderal; dan</li>
<li>Pelaksanaan urusan tata usaha, dan rumah tangga direktorat jenderal.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:47:18',
                'updated_at' => '2024-07-21 12:47:18',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kasubag Umum dan tata Usaha',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan penyiapan perumusan dan pelaksanaan kebijakan di bidang sistem dan strategi pengelolaan sumber daya air.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Penyiapan perumusan kebijakan di bidang sistem, strategi, dan keterpaduan pola pengelolaan sumber daya air, serta perencanaan pengadaan tanah dan pengelolaan pinjaman dan hibah luar negeri bidang sumber daya air;</li>
<li>Penyusunan rencana dan pengembangan strategi, serta rencana strategis pengelolaan sumber daya air</li>
<li>Pelaksanaan kebijakan di bidang pembinaan sistem, strategi, dan keterpaduan pola pengelolaan sumber daya air, serta perencanaan pengadaan tanah dan pengelolaan pinjaman dan hibah luar negeri bidang sumber daya air;</li>
<li>Pelaksanaan kebijakan di bidang pembinaan perencanaan wilayah sungai, kebijakan dan strategi, program dan anggaran, pemantauan dan evaluasi, serta perencanaan pengadaan tanah, dan kerja sama luar negeri;</li>
<li>Pelaksanaan pemantauan, evaluasi dan pelaporan di bidang pembinaan sistem, strategi, dan keterpaduan pola pengelolaan sumber daya air, serta perencanaan pengadaan tanah dan pengelolaan pinjaman dan hibah luar negeri bidang sumber daya air; dan</li>
<li>Pelaksanaan urusan tata usaha direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:51:04',
                'updated_at' => '2024-07-21 12:51:04',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Kepala Seksi Keterpaduan Pembangunan dan Informasi Sumberdaya Air',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur, dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan pemeliharaan sungai, pantai, dan drainase utama perkotaan.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria sungai, pantai, dan drainase utama perkotaan;</li>
<li>Penilaian kesiapan pelaksanaan kegiatan pada sungai, pantai, dan drainase utama perkotaan;</li>
<li>Penyusunan perencanaan sungai, pantai, dan drainase utama perkotaan;</li>
<li>Pembinaan pengelolaan sungai, pantai, dan drainase utama perkotaan;</li>
<li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan prasarana pada sungai, pantai, dan drainase utama perkotaan;</li>
<li>Pelaksanaan fasilitasi pembinaan dan bantuan teknis pengelolaan sungai dan pantai pada wilayah administratif daerah provinsi dan daerah kabupaten/kota sesuai dengan ketentuan peraturan perundang-undangan; dan</li>
<li>Pelaksanaan urusan tata usaha Direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:53:29',
                'updated_at' => '2024-07-21 12:53:29',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Kepala Seksi Pelaksanaan',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur, dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan pemeliharaan irigasi dan rawa.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria irigasi dan rawa;</li>
<li>Penilaian kesiapan pelaksanaan kegiatan pada irigasi dan rawa;</li>
<li>Penyusunan perencanaan irigasi dan rawa;</li>
<li>Pembinaan satu kesatuan pengelolaan sistem irigasi atau rawa sesuai ketentuan peraturan perundang-undangan;</li>
<li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan prasarana pada irigasi dan rawa;</li>
<li>Pelaksanaan kegiatan fasilitasi pembinaan dan bantuan teknik dalam pengelolaan irigasi dan rawa pada wilayah administratif daerah provinsi dan daerah kabupaten/kota sesuai dengan ketentuan peraturan perundang- undangan; dan</li>
<li>Pelaksanaan urusan tata usaha Direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:54:11',
                'updated_at' => '2024-07-21 12:54:11',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Kepala Seksi Operasi dan Pemelihaan Sumberr Daya Air',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur, dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan pemeliharaan bendungan, danau, situ, dan embung, serta konservasi fisik sumber daya air.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria bendungan, danau, situ, dan embung, serta konservasi fisik sumber daya air;</li>
<li>Penilaian kesiapan pelaksanaan kegiatan pada bendungan, danau, situ, dan embung, serta konservasi fisik sumber daya air;</li>
<li>Penyusunan perencanaan bendungan, danau, situ, dan embung, serta konservasi fisik sumber daya air;</li>
<li>Pembinaan pengelolaan bendungan, danau, situ, dan embung, serta konservasi fisik sumber daya air;</li>
<li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan prasarana pada bendungan, danau, situ, dan embung, serta konservasi fisik sumber daya air; dan</li>
<li>Pelaksanaan urusan tata usaha Direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:54:40',
                'updated_at' => '2024-07-21 12:54:40',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Kepala Satuan Kerja Balai Wilayah Sungai',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur, dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan pemeliharaan air tanah dan air baku, serta sarana dan prasarana konservasi air tanah dan air baku.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria air tanah dan air baku, serta sarana dan prasarana konservasi air tanah dan air baku;</li>
<li>Penilaian kesiapan pelaksanaan kegiatan pada air tanah dan air baku, serta pada sarana dan prasarana konservasi air tanah dan air baku;</li>
<li>Penyusunan perencanaan air tanah dan air baku, serta sarana dan prasarana konservasi air tanah dan air baku;</li>
<li>Pembinaan pengelolaan air tanah dan air baku, serta sarana dan prasarana konservasi air tanah dan air baku;</li>
<li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan prasarana pada air tanah dan air baku, serta pada sarana dan prasarana konservasi air tanah dan air baku; dan</li>
<li>Pelaksanaan urusan tata usaha Direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:55:23',
                'updated_at' => '2024-07-21 12:55:23',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Kepala Satuan Kerja SNVT PJSA',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur, dan kriteria di bidang pembinaan operasi dan pemeliharaan serta pembinaan persiapan dan fasilitasi penanganan bencana.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria kelembagaan dan pemanfaatan sumber daya air serta pelaksanaan operasi dan pemeliharaan sungai dan pantai, drainase utama perkotaan, irigasi dan rawa, bendungan, danau, situ, embung, air tanah, dan air baku;</li>
<li>Pelaksanaan kebijakan di bidang pembinaan perencanaan operasi dan pemeliharaan, kelembagaan dan pemanfaatan sumber daya air, serta pelaksanaan operasi dan pemeliharaan sungai dan pantai, drainase utama perkotaan, irigasi dan rawa, bendungan, danau, situ, embung, air tanah, dan air baku;</li>
<li>Pemberian bimbingan teknis dan supervisi di bidang pembinaan perencanaan operasi dan pemeliharaan, kelembagaan dan pemanfaatan sumber daya air, serta pelaksanaan operasi dan pemeliharaan sungai dan pantai, drainase utama perkotaan, irigasi dan rawa, bendungan, danau, situ, embung, air tanah, dan air baku;</li>
<li>Pelaksanaan pemantauan, evaluasi, dan pelaporan di bidang pembinaan perencanaan operasi dan pemeliharaan, kelembagaan dan pemanfaatan sumber daya air, serta pelaksanaan operasi dan pemeliharaan sungai dan pantai, drainase utama perkotaan, irigasi dan rawa, bendungan, danau, situ, embung, air tanah, dan air baku;</li>
<li>pembinaan pelaksanaan penyusunan rencana penyediaan air tahunan prediktif, penilaian kesiapan operasi dan pemeliharaan, pelaksanaan verifikasi alokasi air, pengelolaan peralatan, dan fasilitasi pendukung kelembagaan dan pemanfaatan sumber daya air serta penyiapan fasilitas pendukung operasi dan pemeliharaan sumber daya air;</li>
<li>Pembinaan pemberdayaan masyarakat dalam bidang pelaksanaan operasi dan pemeliharaan;</li>
<li>Pembinaan teknis pengelolaan sumber daya air kepada badan usaha;</li>
<li>Pelaksanaan fasilitasi, pemantauan, dan evaluasi pelaksanaan penanganan bencana dan penyusunan informasi penanggulangan bencana; dan</li>
<li>Pelaksanaan urusan tata usaha direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:55:57',
                'updated_at' => '2024-07-21 12:55:57',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Kepala Satuan Kerja SNVT PJPA',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan penyiapan perumusan dan pelaksanaan kebijakan, serta penyusunan norma, standar, prosedur, dan kriteria di bidang pembinaan teknik sumber daya air.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Penyiapan perumusan kebijakan di bidang pembinaan teknik sumber daya air;</li>
<li>Pelaksanaan kebijakan di bidang pembinaan teknik sumber daya air;</li>
<li>Penyusunan norma, standar, prosedur, dan kriteria di bidang pembinaan teknik dan non teknik bidang sumber daya air;</li>
<li>Pemberian bimbingan teknis dan supervisi di bidang pembinaan teknik sumber daya air;</li>
<li>Pelaksanaan pengkajian, perekayasaan, dan penerapan teknologi konstruksi bidang sumber daya air;</li>
<li>Pelaksanaan diseminasi dan kerja sama pembinaan teknik sumber daya air;</li>
<li>Pelaksanaan pengujian, sertifikasi, inspeksi, kalibrasi, dan advis teknis, serta saran teknis pengalihan alur sungai;</li>
<li>Pelaksanaan penjaminan keamanan bangunan air;</li>
<li>Pengelolaan data dan sistem informasi sumber daya air;</li>
<li>Pembinaan jabatan fungsional bidang sumber daya air;</li>
<li>Pelaksanaan fasilitasi pengembangan profesi bidang sumber daya air; dan</li>
<li>Pelaksanaan urusan tata usaha Direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:56:27',
                'updated_at' => '2024-07-21 12:56:27',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Kepala Satuan Kerja SNVT Pembangunan Bendungan.',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan penyusunan, kebijakan teknis kerangka kerja, pembinaan, pengendalian, pemantauan, evaluasi dan pelaporan kepatuhan intern dan manajemen risiko di Direktorat Jenderal Sumber Daya Air.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Penyusunan kebijakan teknis dan kerangka kerja kepatuhan intern serta manajemen risiko di Direktorat Jenderal Sumber Daya Air;</li>
<li>Pelaksanaan pembinaan teknis kepatuhan intern dan manajemen risiko di Direktorat Jenderal Sumber Daya Air;</li>
<li>Pelaksanaan pengendalian kepatuhan intern dan manajemen risiko terkait kecurangan dan proses bisnis dalam pencapaian target program dan kegiatan di Direktorat Jenderal Sumber Daya Air;</li>
<li>Pemantauan, evaluasi dan pelaporan penerapan kepatuhan intern dan manajemen risiko di Direktorat Jenderal Sumber Daya Air; dan</li>
<li>Pelaksanaan urusan tata usaha direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:56:52',
                'updated_at' => '2024-07-21 12:56:52',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Kepala Satuan Kerja Operasi dan Pemeliharaan Sumber Daya Air',
                'body' => '<p><strong>Tugas</strong><br>Melaksanakan penyusunan, kebijakan teknis kerangka kerja, pembinaan, pengendalian, pemantauan, evaluasi dan pelaporan kepatuhan intern dan manajemen risiko di Direktorat Jenderal Sumber Daya Air.<br><br><strong>Fungsi</strong></p>
<ul>
<li>Penyusunan kebijakan teknis dan kerangka kerja kepatuhan intern serta manajemen risiko di Direktorat Jenderal Sumber Daya Air;</li>
<li>Pelaksanaan pembinaan teknis kepatuhan intern dan manajemen risiko di Direktorat Jenderal Sumber Daya Air;</li>
<li>Pelaksanaan pengendalian kepatuhan intern dan manajemen risiko terkait kecurangan dan proses bisnis dalam pencapaian target program dan kegiatan di Direktorat Jenderal Sumber Daya Air;</li>
<li>Pemantauan, evaluasi dan pelaporan penerapan kepatuhan intern dan manajemen risiko di Direktorat Jenderal Sumber Daya Air; dan</li>
<li>Pelaksanaan urusan tata usaha direktorat.</li>
</ul>',
                'user_id' => '1',
                'active' => 1,
                'created_at' => '2024-07-21 12:57:22',
                'updated_at' => '2024-07-21 12:57:22',
            ),
        ));
        
        
    }
}