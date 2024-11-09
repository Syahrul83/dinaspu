<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Drone',
                'body' => '<p>The term&nbsp;<strong>drone</strong>&nbsp;has been used from the early days of&nbsp;<a title="Aviation" href="https://en.wikipedia.org/wiki/Aviation">aviation</a>, some being applied to remotely flown target&nbsp;<a title="Aircraft" href="https://en.wikipedia.org/wiki/Aircraft">aircraft</a>&nbsp;used for practice firing of a battleship\'s guns, such as the 1920s&nbsp;<a title="Fairey III" href="https://en.wikipedia.org/wiki/Fairey_III">Fairey Queen</a>&nbsp;and 1930s&nbsp;<a title="De Havilland Tiger Moth" href="https://en.wikipedia.org/wiki/De_Havilland_Tiger_Moth#Gunnery_target_drone">de Havilland Queen Bee</a>. Later examples included the&nbsp;<a title="Airspeed Queen Wasp" href="https://en.wikipedia.org/wiki/Airspeed_Queen_Wasp">Airspeed Queen Wasp</a>&nbsp;and&nbsp;<a title="Miles Martinet" href="https://en.wikipedia.org/wiki/Miles_Martinet">Miles Queen Martinet</a>, before ultimate replacement by the&nbsp;<a title="GAF Jindivik" href="https://en.wikipedia.org/wiki/GAF_Jindivik">GAF Jindivik</a>.<sup id="cite_ref-12" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-12">[12]</a></sup>&nbsp;The term remains in common use. In addition to the software, autonomous drones also employ a host of advanced technologies that allow them to carry out their missions without human intervention, such as cloud computing, computer vision, artificial intelligence, machine learning, deep learning, and thermal sensors.<sup id="cite_ref-13" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-13">[13]</a></sup>&nbsp;For recreational uses, an&nbsp;<a title="Aerial photography" href="https://en.wikipedia.org/wiki/Aerial_photography">aerial photography</a>&nbsp;drone is an aircraft that has first-person video, autonomous capabilities, or both.<sup id="cite_ref-dronesetc_14-0" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-dronesetc-14">[14]</a></sup></p>
<p>An&nbsp;<strong>unmanned aerial vehicle</strong>&nbsp;(<strong>UAV</strong>) is defined as a "powered, aerial vehicle that does not carry a human operator, uses&nbsp;<a title="Aerodynamic force" href="https://en.wikipedia.org/wiki/Aerodynamic_force">aerodynamic forces</a>&nbsp;to provide vehicle lift, can fly autonomously or be piloted remotely, can be expendable or recoverable, and can carry a lethal or nonlethal payload".<sup id="cite_ref-15" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-15">[15]</a></sup>&nbsp;UAV is a term that is commonly applied to military use cases.<sup id="cite_ref-16" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-16">[16]</a></sup>&nbsp;<a title="Missile" href="https://en.wikipedia.org/wiki/Missile">Missiles</a>&nbsp;with warheads are generally not considered UAVs because the vehicle itself is a munition, but certain types of propeller-based missile are often called "<a title="Loitering munition" href="https://en.wikipedia.org/wiki/Loitering_munition">kamikaze drones</a>" by the public and media. Also, the relation of UAVs to&nbsp;<a title="Radio-controlled aircraft" href="https://en.wikipedia.org/wiki/Radio-controlled_aircraft">remote controlled model aircraft</a>&nbsp;is unclear,<sup class="noprint Inline-Template Template-Fact">[<em><a title="Wikipedia:Citation needed" href="https://en.wikipedia.org/wiki/Wikipedia:Citation_needed"><span title="This claim needs references to reliable sources. (February 2016)">citation needed</span></a></em>]</sup>&nbsp;UAVs may or may not include remote-controlled model aircraft. Some jurisdictions base their definition on size or weight; however, the US FAA defines any unmanned flying craft as a UAV regardless of size.&nbsp;<sup class="noprint Inline-Template Template-Fact">[<em><a title="Wikipedia:Citation needed" href="https://en.wikipedia.org/wiki/Wikipedia:Citation_needed"><span title="This claim needs references to reliable sources. (May 2022)">citation needed</span></a></em>]</sup>&nbsp;A similar term is&nbsp;<em><strong>remotely piloted aerial vehicle</strong></em>&nbsp;(<strong>RPAV</strong>).</p>
<p>UAVs or RPAVs can also be seen as a component of an&nbsp;<strong>unmanned aircraft system</strong>&nbsp;(<strong>UAS</strong>), which also includes a ground-based controller and a system of communications with the aircraft.<sup id="cite_ref-ast_4-1" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-ast-4">[4]</a></sup>&nbsp;The term UAS was adopted by the&nbsp;<a title="United States Department of Defense" href="https://en.wikipedia.org/wiki/United_States_Department_of_Defense">United States Department of Defense</a>&nbsp;(DoD) and the United States&nbsp;<a title="Federal Aviation Administration" href="https://en.wikipedia.org/wiki/Federal_Aviation_Administration">Federal Aviation Administration</a>&nbsp;(FAA) in 2005 according to their Unmanned Aircraft System Roadmap 2005&ndash;2030.<sup id="cite_ref-17" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-17">[17]</a></sup>&nbsp;The&nbsp;<a title="International Civil Aviation Organization" href="https://en.wikipedia.org/wiki/International_Civil_Aviation_Organization">International Civil Aviation Organization</a>&nbsp;(ICAO) and the&nbsp;<a title="Civil Aviation Authority (United Kingdom)" href="https://en.wikipedia.org/wiki/Civil_Aviation_Authority_(United_Kingdom)">British Civil Aviation Authority</a>&nbsp;adopted this term, also used in the European Union\'s&nbsp;<a title="SESAR Joint Undertaking" href="https://en.wikipedia.org/wiki/SESAR_Joint_Undertaking">Single European Sky (SES) Air Traffic Management (ATM) Research</a>&nbsp;(SESAR Joint Undertaking) roadmap for 2020.<sup id="cite_ref-18" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-18">[18]</a></sup>&nbsp;This term emphasizes the importance of elements other than the aircraft. It includes elements such as ground control stations, data links and other support equipment. Similar terms are&nbsp;<em><strong>unmanned aircraft vehicle system</strong></em>&nbsp;(<strong>UAVS</strong>) and&nbsp;<em><strong>remotely piloted aircraft system</strong></em>&nbsp;(<strong>RPAS</strong>).<sup id="cite_ref-19" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-19">[19]</a></sup>&nbsp;Many similar terms are in use. Under new regulations which came into effect 1 June 2019, the term RPAS has been adopted by the Canadian Government to mean "a set of configurable elements consisting of a remotely piloted aircraft, its control station, the command and control links and any other system elements required during flight operation".<sup id="cite_ref-20" class="reference"><a href="https://en.wikipedia.org/wiki/Unmanned_aerial_vehicle#cite_note-20">[20]</a></sup></p>',
                'image' => NULL,
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-06-24 14:41:15',
                'updated_at' => '2024-07-09 23:42:58',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Kesehatan Masyarakat',
            'body' => '<p><strong>Kesehatan masyarakat</strong>, disingkat&nbsp;<strong>kesmas</strong>&nbsp;(<a title="Bahasa Inggris" href="https://id.wikipedia.org/wiki/Bahasa_Inggris">bahasa Inggris</a>:&nbsp;<em>public health</em>) didefinisikan sebagai "ilmu dan seni&nbsp;<a title="Kedokteran pencegahan" href="https://id.wikipedia.org/wiki/Kedokteran_pencegahan">mencegah penyakit</a>, memperpanjang hidup, dan meningkatkan kualitas hidup dengan melakukan upaya-upaya terorganisasi dan memberi pilihan informasi kepada masyarakat, organisasi (publik dan swasta), komunitas, dan individu".<sup id="cite_ref-1" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-1">[1]</a></sup>&nbsp;Disiplin ilmu ini mempelajari analisis&nbsp;<a title="Determinan sosial kesehatan" href="https://id.wikipedia.org/wiki/Determinan_sosial_kesehatan">determinan kesehatan</a>&nbsp;pada suatu populasi dan ancaman-ancaman yang dihadapinya merupakan hal mendasar dalam kesehatan masyarakat.<sup id="cite_ref-:8_2-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:8-2">[2]</a></sup>&nbsp;<em><a title="Kesehatan" href="https://id.wikipedia.org/wiki/Kesehatan">Kesehatan</a></em>&nbsp;yang dimaksud di sini mencakup kesejahteraan fisik, psikologis, dan sosial. Sementara itu,&nbsp;<em>masyarakat</em>&nbsp;yang dimaksud dapat berupa segelintir orang ataupun keseluruhan penduduk desa atau kota; dalam kondisi&nbsp;<a title="Pandemi" href="https://id.wikipedia.org/wiki/Pandemi">pandemi</a>, masyarakatnya dapat mencakup beberapa benua.<sup id="cite_ref-:10_3-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:10-3">[3]</a></sup></p>
<p>Kesehatan masyarakat merupakan bidang&nbsp;<a title="Antardisiplin" href="https://id.wikipedia.org/wiki/Antardisiplin">antardisiplin</a>, yang melibatkan ilmu-ilmu seperti&nbsp;<a title="Epidemiologi" href="https://id.wikipedia.org/wiki/Epidemiologi">epidemiologi</a>,&nbsp;<a title="Biostatistika" href="https://id.wikipedia.org/wiki/Biostatistika">biostatistika</a>,&nbsp;<a title="Ilmu sosial" href="https://id.wikipedia.org/wiki/Ilmu_sosial">ilmu sosial</a>, dan manajemen&nbsp;<a title="Pelayanan kesehatan" href="https://id.wikipedia.org/wiki/Pelayanan_kesehatan">pelayanan kesehatan</a>. Subbidang lainnya yang dianggap penting di antaranya&nbsp;<a title="Kesehatan lingkungan" href="https://id.wikipedia.org/wiki/Kesehatan_lingkungan">kesehatan lingkungan</a>,&nbsp;<a class="new" title="Kesehatan komunitas (halaman belum tersedia)" href="https://id.wikipedia.org/w/index.php?title=Kesehatan_komunitas&amp;action=edit&amp;redlink=1">kesehatan komunitas</a>,&nbsp;<a title="Kesehatan jiwa" href="https://id.wikipedia.org/wiki/Kesehatan_jiwa">kesehatan jiwa</a>,&nbsp;<a class="mw-redirect" title="Ekonomi kesehatan" href="https://id.wikipedia.org/wiki/Ekonomi_kesehatan">ekonomi kesehatan</a>,&nbsp;<a title="Kebijakan kesehatan" href="https://id.wikipedia.org/wiki/Kebijakan_kesehatan">kebijakan kesehatan</a>,&nbsp;<a title="Penyuluhan kesehatan" href="https://id.wikipedia.org/wiki/Penyuluhan_kesehatan">penyuluhan kesehatan</a>,&nbsp;<a title="Politik kesehatan" href="https://id.wikipedia.org/wiki/Politik_kesehatan">politik kesehatan</a>,&nbsp;<a title="Kesehatan dan keselamatan kerja" href="https://id.wikipedia.org/wiki/Kesehatan_dan_keselamatan_kerja">kesehatan dan keselamatan kerja</a>,&nbsp;<a title="Disabilitas" href="https://id.wikipedia.org/wiki/Disabilitas">disabilitas</a>, masalah&nbsp;<a title="Gender" href="https://id.wikipedia.org/wiki/Gender">gender</a>&nbsp;dalam kesehatan, serta&nbsp;<a class="new" title="Kesehatan reproduksi (halaman belum tersedia)" href="https://id.wikipedia.org/w/index.php?title=Kesehatan_reproduksi&amp;action=edit&amp;redlink=1">kesehatan seksual dan reproduksi</a>.<sup id="cite_ref-4" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-4">[4]</a></sup>&nbsp;Kesehatan masyarakat, bersama dengan&nbsp;<a class="new" title="Pelayanan kesehatan primer (halaman belum tersedia)" href="https://id.wikipedia.org/w/index.php?title=Pelayanan_kesehatan_primer&amp;action=edit&amp;redlink=1">pelayanan kesehatan primer</a>, sekunder, dan tersier, merupakan bagian dari&nbsp;<a title="Sistem kesehatan" href="https://id.wikipedia.org/wiki/Sistem_kesehatan">sistem pelayanan kesehatan</a>&nbsp;suatu negara secara keseluruhan. Kesehatan masyarakat dilaksanakan melalui&nbsp;<a title="Surveilans penyakit" href="https://id.wikipedia.org/wiki/Surveilans_penyakit">surveilans penyakit</a>&nbsp;dan indikator kesehatan, serta melalui promosi perilaku hidup sehat. Perilaku umum yang diinisiasi kesehatan masyarakat di antaranya promosi&nbsp;<a title="Mencuci tangan" href="https://id.wikipedia.org/wiki/Mencuci_tangan">mencuci tangan</a>,&nbsp;<a title="Menyusui" href="https://id.wikipedia.org/wiki/Menyusui">menyusui</a>,&nbsp;<a title="Vaksinasi" href="https://id.wikipedia.org/wiki/Vaksinasi">vaksinasi</a>,&nbsp;<a title="Pencegahan bunuh diri" href="https://id.wikipedia.org/wiki/Pencegahan_bunuh_diri">pencegahan bunuh diri</a>,&nbsp;<a title="Penghentian merokok" href="https://id.wikipedia.org/wiki/Penghentian_merokok">penghentian merokok</a>, pemahaman tentang obesitas, meningkatkan aksesibilitas kesehatan, dan distribusi kondom untuk mengendalikan penyebaran&nbsp;<a title="Penyakit menular seksual" href="https://id.wikipedia.org/wiki/Penyakit_menular_seksual">penyakit menular seksual</a>.</p>
<p>Ada perbedaan yang signifikan dalam mendapatkan akses layanan kesehatan dan inisiatif untuk melakukan upaya-upaya kesehatan masyarakat antara&nbsp;<a title="Negara maju" href="https://id.wikipedia.org/wiki/Negara_maju">negara maju</a>&nbsp;dan&nbsp;<a title="Negara berkembang" href="https://id.wikipedia.org/wiki/Negara_berkembang">negara berkembang</a>, serta di antara sesama negara berkembang. Di negara-negara berkembang, infrastruktur kesehatan masyarakatnya masih terbentuk &mdash; mungkin tidak tersedia cukup tenaga kesehatan yang terlatih, sumber daya keuangan, atau dalam beberapa kasus, pengetahuan untuk memberikan pelayanan medis dan pencegahan penyakit tingkat dasar.<sup id="cite_ref-:4_5-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:4-5">[5]</a></sup><sup id="cite_ref-Jamison_15&ndash;22_6-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-Jamison_15%E2%80%9322-6">[6]</a></sup>&nbsp;Masalah kesehatan masyarakat yang utama di negara-negara berkembang adalah kesehatan ibu dan anak yang buruk, yang makin diperburuk oleh&nbsp;<a title="Malnutrisi" href="https://id.wikipedia.org/wiki/Malnutrisi">malnutrisi</a>&nbsp;dan kemiskinan.</p>
<p>Sejak awal&nbsp;<a title="Peradaban" href="https://id.wikipedia.org/wiki/Peradaban">peradaban</a>&nbsp;manusia, masyarakat telah mempromosikan kesehatan dan memerangi penyakit di tingkat populasi.<sup id="cite_ref-:13_7-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:13-7">[7]</a></sup><sup id="cite_ref-:14_8-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:14-8">[8]</a></sup>&nbsp;Dalam&nbsp;<a title="Masyarakat pra-industri" href="https://id.wikipedia.org/wiki/Masyarakat_pra-industri">masyarakat pra-industri</a>&nbsp;yang kompleks, intervensi-intervensi yang dirancang untuk mengurangi risiko yang mengancam kesehatan sering kali diinisiasi oleh berbagai pemangku kepentingan, seperti penguasa, jenderal militer, atau pemuka agama. Britania Raya merupakan negara yang memulai pengembangan kesehatan masyarakat sejak abad ke-19, karena Britania Raya merupakan negara&nbsp;<a class="mw-redirect" title="Urban" href="https://id.wikipedia.org/wiki/Urban">urban</a>&nbsp;modern pertama di dunia.<sup id="cite_ref-:11_9-0" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:11-9">[9]</a></sup>&nbsp;Inisiatif kesehatan masyarakat awalnya berfokus pada&nbsp;<a title="Sanitasi" href="https://id.wikipedia.org/wiki/Sanitasi">sanitasi</a>&nbsp;(misalnya sistem pembuangan limbah di&nbsp;<a class="mw-redirect" title="Liverpool (kota)" href="https://id.wikipedia.org/wiki/Liverpool_(kota)">Liverpool</a>&nbsp;dan&nbsp;<a title="London" href="https://id.wikipedia.org/wiki/London">London</a>), pengendalian penyakit menular (misalnya vaksinasi dan&nbsp;<a title="Karantina" href="https://id.wikipedia.org/wiki/Karantina">karantina</a>), serta pengembangan berbagai ilmu pengetahuan, misalnya statistika, mikrobiologi, epidemiologi, dan ilmu-ilmu teknik.<sup id="cite_ref-:11_9-1" class="reference"><a href="https://id.wikipedia.org/wiki/Kesehatan_masyarakat#cite_note-:11-9">[9]</a></sup></p>',
                'image' => 'post/01J1KW2C10J3CVJNVXKGRVATKQ.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-06-29 15:44:54',
                'updated_at' => '2024-07-09 12:38:30',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Zona Integritas BWS Kalimantan IV Samarinda',
                'body' => '<p><strong>Zona Integritas BWS Kalimantan IV Samarinda</strong></p>',
                'image' => 'post/01J40TMZSVGW801GN1BT6RBNPB.jpg',
                'kategori_id' => '2',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-07-09 12:40:18',
                'updated_at' => '2024-07-30 14:16:30',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Pengumuman Hasil Wawancara TPM P3-TGAI TA.2024',
            'body' => '<p>Pengumuman Hasil Wawancara Tenaga Pendamping Masyarakat (TPM) P3-TGAI, BWS Kalimantan IV Samarinda Tahun Anggaran 2024</p>
<p>Bagi peserta yang lolos pada tahap tes tertulis online dan mengikuti Jadwal Wawancara dapat dilihat pada link:<br>https://bit.ly/Pengumuman_Hasil_Wawancara_P3TGAI</p>
<p>Sehubungan dengan telah dilaksanakan seleksi wawancara secara online pada hari Rabu, 22 Juni 2024 pukul 10.00 wita s/d selesai. Didapatkan nilai sebagaimana terlampir dan hasil penilaian wawancara bersifat final. Maka kami sampaikan kepada bapak/ibu peserta yang nilainya dari urutan tertinggi 1 (satu) sampai 5 (lima), berhak untuk mengadakan penandatanganan surat perjanjian kerja (SPK) dan pelatihan TPM yang akan dilaksanakan pada :</p>
<p>Hari : Senin, 29 Juli 2024<br>Waktu : Pukul 09:00 Wita s/d Selesai<br>Alamat : Ruang Rapat Mahakam Lantai 1 Gedung Utama Kantor Balai Wilayah Sungai Kalimantan IV Samarinda (Jl. MT. Haryono No. 36 Samarinda)<br>Pakaian : Kemeja Putih dan Celana/Rok Hitam (berbahan kain)</p>
<p>&nbsp;</p>',
                'image' => 'post/01J414EW2QN3GX7RP9TQCFC6WZ.jpg',
                'kategori_id' => '3',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-07-09 12:51:01',
                'updated_at' => '2024-07-30 14:15:21',
            ),
            4 => 
            array (
                'id' => 8,
                'title' => 'Sidang Pleno Ke-II TKPSDA WS. Mahakam',
            'body' => '<p>Balai Wilayah Sungai Kalimantan IV Samarinda menggelar sidang Pleno ke-II, Tim Kordinasi Pengelolaan Sumber Daya Air (TKPSDA) Wilayah Sungai Mahakam, kegiatan ini dilangsungkan mulai 11-14 Juni 2024 melalui tatap muka dan daring. bertempat di Astara Hotel, Kota Balikpapan.</p>
<p>.</p>
<p>&nbsp;</p>',
                'image' => 'post/01J40XMFQ0VJYQHMMH4KAMJV4V.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-07-09 14:11:27',
                'updated_at' => '2024-07-30 12:16:05',
            ),
            5 => 
            array (
                'id' => 9,
                'title' => 'Koordinasi Penerapan MR Triwulan III & Evaluasi Anggaran Tahun 2024',
                'body' => '<p>Menindaklanjuti hasil Rapat Monitoring dan Evaluasi Anggaran Penerapan Kepatuhan Internal dan Manajemen Risiko Ditjen SDA Tahun 2024 pada tanggal 12 Juli 2024, Balai Wilayah Sungai Kalimantan IV Samarinda melakukan Rapat Koordinasi Pemantauan Pelaksanaan Penerapan Manajemen Risiko Triwulan III, Monitoring dan Evaluasi Penggunaan Anggaran Manajemen Risiko &Tau;&Alpha; 2024</p>',
                'image' => 'post/01J40Y7N71HFGF0ZCFVSQ4K6WJ.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-07-09 14:12:22',
                'updated_at' => '2024-07-30 12:26:34',
            ),
            6 => 
            array (
                'id' => 10,
            'title' => 'Kunjungan Pak Jokowi ke Embung MBH (IKN)',
            'body' => '<p>Presiden Joko Widodo melakukan kunjungan ke Embung MBH pada 28 Juli 2024. Embung MBH merupakan salah satu dari 19 embung yang dibangun di Kawasan Inti Pusat Pemerintahan (KIPP) IKN untuk mewujudkan konsep sponge city.</p>',
                'image' => 'post/01J413BVYS5C6AHDKWXD500Y2R.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-07-09 14:13:21',
                'updated_at' => '2024-07-30 13:56:14',
            ),
            7 => 
            array (
                'id' => 11,
                'title' => 'Direktur Jenderal SDA Meninjau Kesiapan Infrastruktur IKN',
                'body' => '<p>Senin 29 Juli 2024, Direktur Jenderal Sumber Daya Air Kementerian PUPR, Ir. Bob Arthur Lombogia, M.Si melakukan kunjungan kerja guna meninjau kesiapan Infrastruktrur SDA dalam rangka mendukung kelancaran Peringatan Hari Kemerdekaan 17 Agustus 2024 yang rencananya akan di laksanakan di Ibu Kota Nusantara</p>',
                'image' => 'post/01J413HP2HG945X82JSDEQFHSA.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-07-20 15:55:30',
                'updated_at' => '2024-07-30 13:59:25',
            ),
            8 => 
            array (
                'id' => 12,
            'title' => 'Kunjungan Presiden RI dan Wakil Presiden ke Embung MBH (IKN)',
            'body' => '<p>Senin 12 Agustus 2024, Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR) Basuki Hadimuljono mendampingi Presiden Joko Widodo dan Wakil Presiden K.H. Ma&rsquo;ruf Amin beserta seluruh jajaran Menteri Kabinet Indonesia Maju mengunjungi Embung MBH yang terletak di Kawasan Inti Pusat Pemerintahan IKN untuk menikmati udara pagi yang bersih serta &nbsp;meninjau persiapan Peringatan Hari Kemerdekaan RI ke-79 yang akan diselenggarakan di IKN.</p>',
                'image' => 'post/01J57VQKCEMBPVBZSTCAJXE4W4.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-08-14 15:13:13',
                'updated_at' => '2024-08-14 15:13:13',
            ),
            9 => 
            array (
                'id' => 13,
            'title' => 'Kepala Daerah Seluruh Indonesia berkunjung ke Embung MBH (IKN)',
            'body' => '<p>Selasa 13 Agustus 2024 sebelum menghadiri acara pengarahan oleh Presiden Republik Indonesia di Istana Garuda, Menteri Dalam Negeri beserta dengan Kepala Daerah Seluruh Indonesia berkunjung ke Embung MBH didampingi Menteri PUPR sekaligus Plt Kepala Otorita Ibu Kota Nusantara (OIKN) Basuki Hadimuljono untuk melihat pembangunan infrastruktur IKN serta menikmati udara segar pagi hari di IKN.</p>',
                'image' => 'post/01J57VVW2J5EZEKNTMFBX7R883.jpg',
                'kategori_id' => '1',
                'user_id' => '1',
                'status' => 'publish',
                'created_at' => '2024-08-14 15:15:33',
                'updated_at' => '2024-08-14 15:15:33',
            ),
        ));
        
        
    }
}