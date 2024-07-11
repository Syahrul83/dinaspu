<!-- isi -->
<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12 appear-animation animated fadeInLeftShorter appear-animation-visible"
            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase "> {{ $post->title }} </div>
                <br>
                <div class="container-fluid">
                    @if (isset($post->image))
                        <a href="{{asset('storage/' . $post->image)}}" rel="prettyPhoto">
                            <img class="img-fluid" src="{{asset('storage/' . $post->image)}}" height="auto">
                        </a>
                        <br>
                    @endif
                    {{ $post->body }}
                </div>


            </div> <br> <!-- Widget -->
            <div class="card">
                <div class="card-side bg-color-primary text-3 text-uppercase ">Uraian Tugas dan Tanggung Jawab</div>
                <div class="col-12 col-lg-12">
                    <hr> <!-- Post Content -->
                    <div class="toggle toggle-primary toggle-lg" data-plugin-toggle="">
                        <section class="toggle"> <a
                                class="toggle-title appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp" data-appear-animation-delay="50"
                                style="animation-delay: 50ms;">Kepala Balai</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Memberikan pelayanan teknis dan administratif kepada seluruh
                                    unsur organisasi di lingkungan direktorat jenderal sumber daya air. <br> <br>
                                    <b>Fungsi</b>
                                </p>
                                <ul>
                                    <li>Pemberian bimbingan teknis dan supervisi dalam penyusunan laporan akuntansi
                                        dan laporan barang milik negara; </li>
                                    <li>Pelaksanaan administrasi perbendaharaan dan pengelolaan penerimaan negara
                                        bukan pajak; </li>
                                    <li>Pengelolaan barang milik negara di lingkungan direktorat jenderal;</li>
                                    <li>Pelaksanaan koordinasi administrasi kebencanaan;</li>
                                    <li>Pelaksanaan koordinasi dan penyusunan peraturan perundang-undangan,
                                        fasilitasi advokasi hukum serta penyelenggaraan komunikasi publik direktorat
                                        jenderal; </li>
                                    <li>Pelaksanaan pembinaan urusan kepegawaian, organisasi, dan tata laksana,
                                        serta reformasi birokrasi; </li>
                                    <li>Pelaksanaan penyusunan laporan sistem pengendalian intern pemerintah di
                                        lingkungan direktorat jenderal; dan </li>
                                    <li>Pelaksanaan urusan tata usaha, dan rumah tangga direktorat jenderal.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a
                                class="toggle-title appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp" data-appear-animation-delay="100"
                                style="animation-delay: 100ms;">Kasubag Umum dan tata Usaha</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan penyiapan perumusan dan pelaksanaan kebijakan di
                                    bidang sistem dan strategi pengelolaan sumber daya air. <br> <br> <b>Fungsi</b>
                                </p>
                                <ul>
                                    <li>Penyiapan perumusan kebijakan di bidang sistem, strategi, dan keterpaduan
                                        pola pengelolaan sumber daya air, serta perencanaan pengadaan tanah dan
                                        pengelolaan pinjaman dan hibah luar negeri bidang sumber daya air; </li>
                                    <li>Penyusunan rencana dan pengembangan strategi, serta rencana strategis
                                        pengelolaan sumber daya air </li>
                                    <li>Pelaksanaan kebijakan di bidang pembinaan sistem, strategi, dan keterpaduan
                                        pola pengelolaan sumber daya air, serta perencanaan pengadaan tanah dan
                                        pengelolaan pinjaman dan hibah luar negeri bidang sumber daya air; </li>
                                    <li>Pelaksanaan kebijakan di bidang pembinaan perencanaan wilayah sungai,
                                        kebijakan dan strategi, program dan anggaran, pemantauan dan evaluasi, serta
                                        perencanaan pengadaan tanah, dan kerja sama luar negeri; </li>
                                    <li>Pelaksanaan pemantauan, evaluasi dan pelaporan di bidang pembinaan sistem,
                                        strategi, dan keterpaduan pola pengelolaan sumber daya air, serta
                                        perencanaan pengadaan tanah dan pengelolaan pinjaman dan hibah luar negeri
                                        bidang sumber daya air; dan </li>
                                    <li>Pelaksanaan urusan tata usaha direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a
                                class="toggle-title appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp" data-appear-animation-delay="200"
                                style="animation-delay: 200ms;">Kepala Seksi Keterpaduan Pembangunan dan Informasi
                                Sumberdaya Air</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur,
                                    dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan
                                    pemeliharaan sungai, pantai, dan drainase utama perkotaan. <br> <br>
                                    <b>Fungsi</b>
                                </p>
                                <ul>
                                    <li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria sungai, pantai,
                                        dan drainase utama perkotaan; </li>
                                    <li>Penilaian kesiapan pelaksanaan kegiatan pada sungai, pantai, dan drainase
                                        utama perkotaan; </li>
                                    <li>Penyusunan perencanaan sungai, pantai, dan drainase utama perkotaan;</li>
                                    <li>Pembinaan pengelolaan sungai, pantai, dan drainase utama perkotaan;</li>
                                    <li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan
                                        prasarana pada sungai, pantai, dan drainase utama perkotaan; </li>
                                    <li>Pelaksanaan fasilitasi pembinaan dan bantuan teknis pengelolaan sungai dan
                                        pantai pada wilayah administratif daerah provinsi dan daerah kabupaten/kota
                                        sesuai dengan ketentuan peraturan perundang-undangan; dan </li>
                                    <li>Pelaksanaan urusan tata usaha Direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a
                                class="toggle-title appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp" data-appear-animation-delay="300"
                                style="animation-delay: 300ms;">Kepala Seksi Pelaksanaan</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur,
                                    dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan
                                    pemeliharaan irigasi dan rawa. <br> <br> <b>Fungsi</b> </p>
                                <ul>
                                    <li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria irigasi dan
                                        rawa; </li>
                                    <li>Penilaian kesiapan pelaksanaan kegiatan pada irigasi dan rawa;</li>
                                    <li>Penyusunan perencanaan irigasi dan rawa;</li>
                                    <li>Pembinaan satu kesatuan pengelolaan sistem irigasi atau rawa sesuai
                                        ketentuan peraturan perundang-undangan; </li>
                                    <li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan
                                        prasarana pada irigasi dan rawa; </li>
                                    <li>Pelaksanaan kegiatan fasilitasi pembinaan dan bantuan teknik dalam
                                        pengelolaan irigasi dan rawa pada wilayah administratif daerah provinsi dan
                                        daerah kabupaten/kota sesuai dengan ketentuan peraturan perundang- undangan;
                                        dan </li>
                                    <li>Pelaksanaan urusan tata usaha Direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a
                                class="toggle-title appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp" data-appear-animation-delay="400"
                                style="animation-delay: 400ms;">Kepala Seksi Operasi dan Pemelihaan Sumberr Daya Air</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur,
                                    dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan
                                    pemeliharaan bendungan, danau, situ, dan embung, serta konservasi fisik sumber
                                    daya air. <br> <br> <b>Fungsi</b> </p>
                                <ul>
                                    <li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria bendungan,
                                        danau, situ, dan embung, serta konservasi fisik sumber daya air; </li>
                                    <li>Penilaian kesiapan pelaksanaan kegiatan pada bendungan, danau, situ, dan
                                        embung, serta konservasi fisik sumber daya air; </li>
                                    <li>Penyusunan perencanaan bendungan, danau, situ, dan embung, serta konservasi
                                        fisik sumber daya air; </li>
                                    <li>Pembinaan pengelolaan bendungan, danau, situ, dan embung, serta konservasi
                                        fisik sumber daya air; </li>
                                    <li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan
                                        prasarana pada bendungan, danau, situ, dan embung, serta konservasi fisik
                                        sumber daya air; dan </li>
                                    <li>Pelaksanaan urusan tata usaha Direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a class="toggle-title appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="500">Kepala Satuan Kerja Balai Wilayah Sungai</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur,
                                    dan kriteria, serta perencanaan, persiapan, dan pelaksanaan operasi dan
                                    pemeliharaan air tanah dan air baku, serta sarana dan prasarana konservasi air
                                    tanah dan air baku. <br> <br> <b>Fungsi</b> </p>
                                <ul>
                                    <li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria air tanah dan
                                        air baku, serta sarana dan prasarana konservasi air tanah dan air baku;
                                    </li>
                                    <li>Penilaian kesiapan pelaksanaan kegiatan pada air tanah dan air baku, serta
                                        pada sarana dan prasarana konservasi air tanah dan air baku; </li>
                                    <li>Penyusunan perencanaan air tanah dan air baku, serta sarana dan prasarana
                                        konservasi air tanah dan air baku; </li>
                                    <li>Pembinaan pengelolaan air tanah dan air baku, serta sarana dan prasarana
                                        konservasi air tanah dan air baku; </li>
                                    <li>Pembinaan persiapan pelaksanaan operasi dan pemeliharaan sarana dan
                                        prasarana pada air tanah dan air baku, serta pada sarana dan prasarana
                                        konservasi air tanah dan air baku; dan </li>
                                    <li>Pelaksanaan urusan tata usaha Direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a class="toggle-title appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="600">Kepala Satuan Kerja SNVT PJSA</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan pembinaan pelaksanaan norma, standar, prosedur,
                                    dan kriteria di bidang pembinaan operasi dan pemeliharaan serta pembinaan
                                    persiapan dan fasilitasi penanganan bencana. <br> <br> <b>Fungsi</b> </p>
                                <ul>
                                    <li>Pembinaan pelaksanaan norma, standar, prosedur, dan kriteria kelembagaan dan
                                        pemanfaatan sumber daya air serta pelaksanaan operasi dan pemeliharaan
                                        sungai dan pantai, drainase utama perkotaan, irigasi dan rawa, bendungan,
                                        danau, situ, embung, air tanah, dan air baku; </li>
                                    <li>Pelaksanaan kebijakan di bidang pembinaan perencanaan operasi dan
                                        pemeliharaan, kelembagaan dan pemanfaatan sumber daya air, serta pelaksanaan
                                        operasi dan pemeliharaan sungai dan pantai, drainase utama perkotaan,
                                        irigasi dan rawa, bendungan, danau, situ, embung, air tanah, dan air baku;
                                    </li>
                                    <li>Pemberian bimbingan teknis dan supervisi di bidang pembinaan perencanaan
                                        operasi dan pemeliharaan, kelembagaan dan pemanfaatan sumber daya air, serta
                                        pelaksanaan operasi dan pemeliharaan sungai dan pantai, drainase utama
                                        perkotaan, irigasi dan rawa, bendungan, danau, situ, embung, air tanah, dan
                                        air baku; </li>
                                    <li>Pelaksanaan pemantauan, evaluasi, dan pelaporan di bidang pembinaan
                                        perencanaan operasi dan pemeliharaan, kelembagaan dan pemanfaatan sumber
                                        daya air, serta pelaksanaan operasi dan pemeliharaan sungai dan pantai,
                                        drainase utama perkotaan, irigasi dan rawa, bendungan, danau, situ, embung,
                                        air tanah, dan air baku; </li>
                                    <li>pembinaan pelaksanaan penyusunan rencana penyediaan air tahunan prediktif,
                                        penilaian kesiapan operasi dan pemeliharaan, pelaksanaan verifikasi alokasi
                                        air, pengelolaan peralatan, dan fasilitasi pendukung kelembagaan dan
                                        pemanfaatan sumber daya air serta penyiapan fasilitas pendukung operasi dan
                                        pemeliharaan sumber daya air; </li>
                                    <li>Pembinaan pemberdayaan masyarakat dalam bidang pelaksanaan operasi dan
                                        pemeliharaan; </li>
                                    <li>Pembinaan teknis pengelolaan sumber daya air kepada badan usaha;</li>
                                    <li>Pelaksanaan fasilitasi, pemantauan, dan evaluasi pelaksanaan penanganan
                                        bencana dan penyusunan informasi penanggulangan bencana; dan </li>
                                    <li>Pelaksanaan urusan tata usaha direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a class="toggle-title appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="700">Kepala Satuan Kerja SNVT PJPA</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan penyiapan perumusan dan pelaksanaan kebijakan,
                                    serta penyusunan norma, standar, prosedur, dan kriteria di bidang pembinaan
                                    teknik sumber daya air. <br> <br> <b>Fungsi</b> </p>
                                <ul>
                                    <li>Penyiapan perumusan kebijakan di bidang pembinaan teknik sumber daya air;
                                    </li>
                                    <li>Pelaksanaan kebijakan di bidang pembinaan teknik sumber daya air;</li>
                                    <li>Penyusunan norma, standar, prosedur, dan kriteria di bidang pembinaan teknik
                                        dan non teknik bidang sumber daya air; </li>
                                    <li>Pemberian bimbingan teknis dan supervisi di bidang pembinaan teknik sumber
                                        daya air; </li>
                                    <li>Pelaksanaan pengkajian, perekayasaan, dan penerapan teknologi konstruksi
                                        bidang sumber daya air; </li>
                                    <li>Pelaksanaan diseminasi dan kerja sama pembinaan teknik sumber daya air;</li>
                                    <li>Pelaksanaan pengujian, sertifikasi, inspeksi, kalibrasi, dan advis teknis,
                                        serta saran teknis pengalihan alur sungai; </li>
                                    <li>Pelaksanaan penjaminan keamanan bangunan air;</li>
                                    <li>Pengelolaan data dan sistem informasi sumber daya air;</li>
                                    <li>Pembinaan jabatan fungsional bidang sumber daya air;</li>
                                    <li>Pelaksanaan fasilitasi pengembangan profesi bidang sumber daya air; dan</li>
                                    <li>Pelaksanaan urusan tata usaha Direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a class="toggle-title appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="800">Kepala Satuan Kerja SNVT Pembangunan Bendungan.</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan penyusunan, kebijakan teknis kerangka kerja,
                                    pembinaan, pengendalian, pemantauan, evaluasi dan pelaporan kepatuhan intern dan
                                    manajemen risiko di Direktorat Jenderal Sumber Daya Air. <br> <br> <b>Fungsi</b>
                                </p>
                                <ul>
                                    <li>Penyusunan kebijakan teknis dan kerangka kerja kepatuhan intern serta
                                        manajemen risiko di Direktorat Jenderal Sumber Daya Air; </li>
                                    <li>Pelaksanaan pembinaan teknis kepatuhan intern dan manajemen risiko di
                                        Direktorat Jenderal Sumber Daya Air; </li>
                                    <li>Pelaksanaan pengendalian kepatuhan intern dan manajemen risiko terkait
                                        kecurangan dan proses bisnis dalam pencapaian target program dan kegiatan di
                                        Direktorat Jenderal Sumber Daya Air; </li>
                                    <li>Pemantauan, evaluasi dan pelaporan penerapan kepatuhan intern dan manajemen
                                        risiko di Direktorat Jenderal Sumber Daya Air; dan </li>
                                    <li>Pelaksanaan urusan tata usaha direktorat.</li>
                                </ul>
                            </div>
                        </section>
                        <section class="toggle"> <a class="toggle-title appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="800">Kepala Satuan Kerja Operasi dan Pemeliharaan Sumber
                                Daya Air</a>
                            <div class="toggle-content">
                                <p> <b>Tugas</b> <br>Melaksanakan penyusunan, kebijakan teknis kerangka kerja,
                                    pembinaan, pengendalian, pemantauan, evaluasi dan pelaporan kepatuhan intern dan
                                    manajemen risiko di Direktorat Jenderal Sumber Daya Air. <br> <br> <b>Fungsi</b>
                                </p>
                                <ul>
                                    <li>Penyusunan kebijakan teknis dan kerangka kerja kepatuhan intern serta
                                        manajemen risiko di Direktorat Jenderal Sumber Daya Air; </li>
                                    <li>Pelaksanaan pembinaan teknis kepatuhan intern dan manajemen risiko di
                                        Direktorat Jenderal Sumber Daya Air; </li>
                                    <li>Pelaksanaan pengendalian kepatuhan intern dan manajemen risiko terkait
                                        kecurangan dan proses bisnis dalam pencapaian target program dan kegiatan di
                                        Direktorat Jenderal Sumber Daya Air; </li>
                                    <li>Pemantauan, evaluasi dan pelaporan penerapan kepatuhan intern dan manajemen
                                        risiko di Direktorat Jenderal Sumber Daya Air; dan </li>
                                    <li>Pelaksanaan urusan tata usaha direktorat.</li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div><br>
            <!-- Widget <div class="card"><div class="card-side bg-color-primary text-3 text-uppercase ">Informasi Kepegawaian</div><div class="card-body"><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_s2_dalam_negeri_bidang_kominfo' target='_blank' title='Beasiswa S2 Dalam Negeri Bidang Kominfo'>Beasiswa S2 Dalam Negeri Bidang Kominfo </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_stuned' target='_blank' title='Beasiswa StuNed'>Beasiswa StuNed </a></br><i class='fas fa-envelope-open-text text-info'></i>&nbsp;<a href='https://sda.pu.go.id/berita/view/beasiswa_swedish_institute_scholarship_for_global_professionals' target='_blank' title='Beasiswa Swedish Institute Scholarship for Global Professionals'>Beasiswa Swedish Institute Scholarship for Global Professionals </a></br></div></div><br> -->
        </div>
    </div>
</div>
<!-- tutup isi -->
