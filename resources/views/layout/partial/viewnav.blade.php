<header id="header" class="header-effect-shrink"
    data-plugin-options="{&#39;stickyEnabled&#39;: true, &#39;stickyEffect&#39;: &#39;shrink&#39;, &#39;stickyEnableOnBoxed&#39;: true, &#39;stickyEnableOnMobile&#39;: true, &#39;stickyChangeLogo&#39;: true, &#39;stickyStartAt&#39;: 120, &#39;stickyHeaderContainerHeight&#39;: 70}"
    style="height: 129px">
    <div class="header-body border-top-0" style="position: fixed">
        <div class="header-top header-top-borders bg-primary" style="height: 40px">
            <div class="container h-100" style="max-width: 1600px">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">


                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex "> <a href="/"
                                            class="text-white"><img src="/assets/logo-pu.png" alt="Indonesia"
                                                width="25"> PUPR</a> </li>
                                    <li class="nav-item nav-item-borders py-2"> <a href="{{ route('home') }}"
                                            class="text-white"><i class="fa fa-home text-4" aria-hidden="true"
                                                style="top: 0;"></i>
                                            {{ $kontak->no_hp }}</a> </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex"> <a
                                            href="mailto:infosda@pu.go.id" class="text-white text-3"><i
                                                class="fas fa-envelope text-4 text-white" style="top: 0;"></i>
                                            {{ $kontak->email }}</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex"> <a
                                            href="{{ route('home') }}" class="text-white">
                                            {{ now()->locale('id')->translatedformat('l, j F Y') }}
                                        </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 82px">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo" style="width: 500px; height: 50px">
                            <a href="{{ route('home') }}">
                                <img alt="Ditjen SDA" width="500" height="50" data-sticky-width="400"
                                    data-sticky-height="40" src="/assets/sda_logo.png" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown dropdown-reverse">
                                            <a href="{{ route('home') }}" class="dropdown-item"><i
                                                    class="fas fa-home"></i></a>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-item dropdown-toggle">PROFIL<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('page', 1) }}" class="dropdown-item">Visi dan
                                                        Misi</a>
                                                </li>
                                                <li><a href="{{ route('page', 2) }}" class="dropdown-item">Tugas dan
                                                        Fungsi</a></li>
                                                <li><a href="{{ route('page', 3) }}" class="dropdown-item">Struktur
                                                        Organisasi</a></li>
                                                <li><a href="{{ route('page', 4) }}" class="dropdown-item">Sejarah</a>
                                                </li>
                                                <li><a href="{{ route('lokasi') }}" class="dropdown-item">Lokasi
                                                        Kantor</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"
                                                class="dropdown-item dropdown-toggle">KELEMBAGAAN<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('page', 6) }}" class="dropdown-item">TKSPDA</a>
                                                </li>
                                                <li><a href="{{ route('page', 7) }}" class="dropdown-item">KOMUNITAS
                                                        PEDULI
                                                        SUNGAI</a></li>
                                                <li><a href="{{ route('page', 8) }}" class="dropdown-item">KOMISI
                                                        IRIGASI</a></li>
                                                <li><a href="{{ route('page', 9) }}" class="dropdown-item">P3A</a></li>
                                                <li><a href="{{ route('page', 10) }}" class="dropdown-item">GNKPA</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-item dropdown-toggle">LAYANAN
                                                dan Aplikasi<i class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('page', 11) }}" class="dropdown-item">Rekomtek
                                                        SDA</a></li>

                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">SISDA <i
                                                            class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('page', 12) }}" class="dropdown-item">
                                                                Informasi Hidrologi</a></li>
                                                        <li><a href="{{ route('page', 13) }}"
                                                                class="dropdown-item">Informasi Irigasi dan Rawa</a>
                                                        </li>
                                                        <li><a href="{{ route('page', 14) }}"
                                                                class="dropdown-item">Informasi Bendungan dan Waduk</a>
                                                        </li>
                                                        <li><a href="{{ route('page', 15) }}"
                                                                class="dropdown-item">Informasi Bendung</a></li>
                                                        <li><a href="{{ route('page', 16) }}"
                                                                class="dropdown-item">Informasi Sungai</a></li>
                                                        <li><a href="{{ route('page', 17) }}"
                                                                class="dropdown-item">Informasi Danau</a></li>
                                                        <li><a href="{{ route('page', 18) }}"
                                                                class="dropdown-item">Informasi Sumur Dalam</a></li>
                                                        <li><a href="{{ route('page', 19) }}"
                                                                class="dropdown-item">Informasi Alokasi Air</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('page', 20) }}" class="dropdown-item">WebGIS BWS
                                                        KIV-SMD</a></li>
                                                <li><a href="{{ route('page', 21) }}" class="dropdown-item">SIH3 WS
                                                        Mahakam</a></li>
                                                <li><a href="{{ route('page', 22) }}" class="dropdown-item">Laporan
                                                        Bencana</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"
                                                class="dropdown-item dropdown-toggle">PUBLIKASI<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Informasi
                                                        SDA<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('sda', 1) }}" class="dropdown-item">Pola
                                                                Wilayah Sungai</a>
                                                        </li>
                                                        <li><a href="{{ route('sda', 2) }}"
                                                                class="dropdown-item">Rencana
                                                                PSDA Wilayah
                                                                Sungai</a></li>
                                                        <li><a href="{{ route('sda', 3) }}"
                                                                class="dropdown-item">Sebaran
                                                                Perijinan SDA</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Laporan
                                                        Satgas Bencana SDA<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('lapSatgas', 'banjir') }}"
                                                                class="dropdown-item">Laporan Banjir</a>
                                                        </li>
                                                        <li><a href="{{ route('lapSatgas', 'kekeringan') }}"
                                                                class="dropdown-item">Laporan Kekeringan</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Media
                                                        Informasi <i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('lapSatgas', 'majalah-pesut') }}"
                                                                class="dropdown-item">Majalah Pesut</a></li>
                                                        <li><a href="{{ route('lapSatgas', 'buku-data') }}"
                                                                class="dropdown-item">Buku Data</a></li>
                                                        <li><a href="{{ route('lapSatgas', 'publikasi-hidrologi') }}"
                                                                class="dropdown-item">Publikasi Hidrologi</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Galeri <i
                                                            class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('galery-foto') }}"
                                                                class="dropdown-item">Galeri Foto</a></li>
                                                        <li><a href="{{ route('galery-video') }}"
                                                                class="dropdown-item">Galeri Video</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Hasil
                                                        Survey Kepuasan<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('kinerja-balai') }}"
                                                                class="dropdown-item">Kinerja Balai</a></li>
                                                        <li><a href="{{ route('pelayanan-perijinan') }}"
                                                                class="dropdown-item">Pelayanan Perijinan</a></li>
                                                        <li><a href="{{ route('pelayanan-data') }}"
                                                                class="dropdown-item">Pelayanan Data</a></li>
                                                        <li><a href="{{ route('tata-kelola-infrastruktur') }}"
                                                                class="dropdown-item">Layanan Tata Kelola Infsratruktur
                                                                SDA</a></li>
                                                        <li><a href="{{ route('layanan-barjas') }}"
                                                                class="dropdown-item">Layanan Pengadaan Barang dan
                                                                Jasa</a></li>
                                                        <li><a href="{{ route('layanan-tanggap-darurat-pasca-bencana') }}"
                                                                class="dropdown-item">Layanan Tanggap Darurat Pasca
                                                                Bencana</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="dropdown"><a href="#"
                                                class="dropdown-item dropdown-toggle">Pengaduan<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('lapor') }}" class="dropdown-item">L.A.P.O.R.!</a>
                                                </li>
                                                <li><a href="{{ route('gratifikasi') }}"
                                                        class="dropdown-item">e-GRATIFIKASI</a></li>
                                                <li><a href="{{ route('wbs') }}" class="dropdown-item">Wistle
                                                        Blowing System</a></li>
                                                <li><a href="{{ route('lapor-kabalai') }}" class="dropdown-item">Lapor
                                                        BWS KIV SMD</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex "> <a href="/"
                                        class="text-white"><img src="/assets/zi.png" alt="Indonesia" width="120">
                                        PUPR</a> </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
