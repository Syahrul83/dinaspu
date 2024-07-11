<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




//Route Home
// Route::get('/', function () {
//     return view('home.index');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/semua-berita', [HomeController::class, 'semuaBerita'])->name('semuaBerita');
Route::get('/selengkapya/{id}', [HomeController::class, 'selengkapBerita'])->name('selengkapBerita');
Route::get('/page/{id}', [HomeController::class, 'page'])->name('page');
Route::get('/lokasi', function () {
    return view('home.halaman.lokasi');
})->name('lokasi');

Route::get('/sda/{id}', [HomeController::class, 'sda'])->name('sda');


Route::get('/publikasi/{name}', [HomeController::class, 'lapSatgas'])->name('lapSatgas');

Route::get('/galleri/{name}', [HomeController::class, 'galleri'])->name('galleri');


// Route::get('/tes', function () {
//     return view('home.content.selengkapPost');
// })->name('tes');

//route Profil
Route::get('/visi-misi', function () {
    return view('profil.visi-misi');
})->name('visi-misi');

Route::get('/tusi', function () {
    return view('profil.tugas-fungsi');
})->name('tusi');

Route::get('/struktur', function () {
    return view('profil.struktur');
})->name('struktur');

Route::get('/sejarah', function () {
    return view('profil.sejarah');
})->name('sejarah');

Route::get('/lokasi-kantor', function () {
    return view('profil.lokasi-kantor');
})->name('lokasi-kantor');


//route Kelembagaan

Route::get('/tkpsda', function () {
    return view('kelembagaan.tkpsda');
})->name('tkpsda');

Route::get('/kmps', function () {
    return view('kelembagaan.kmps');
})->name('kmps');

Route::get('/komir', function () {
    return view('kelembagaan.komir');
})->name('komir');

Route::get('/p3a', function () {
    return view('kelembagaan.p3a');
})->name('p3a');

Route::get('/gnkpa', function () {
    return view('kelembagaan.gnkpa');
})->name('gnkpa');

//route Layanan dan Aplikasi

Route::get('/rekomtek', function () {
    return view('layanan-aplikasi.rekomtek');
})->name('rekomtek');


Route::get('/hidrologi', function () {
    return view('layanan-aplikasi.sisda.hidrologi');
})->name('hidrologi');

Route::get('/irwa', function () {
    return view('layanan-aplikasi.sisda.irwa');
})->name('irwa');

Route::get('/bendungan-waduk', function () {
    return view('layanan-aplikasi.sisda.bendungan-waduk');
})->name('bendungan-waduk');

Route::get('/bendung', function () {
    return view('layanan-aplikasi.sisda.bendung');
})->name('bendung');

Route::get('/sungai', function () {
    return view('layanan-aplikasi.sisda.sungai');
})->name('sungai');

Route::get('/danau', function () {
    return view('layanan-aplikasi.sisda.danau');
})->name('danau');

Route::get('/sumur-dalam', function () {
    return view('layanan-aplikasi.sisda.sumur-dalam');
})->name('sumur-dalam');

Route::get('/alokasi-air', function () {
    return view('layanan-aplikasi.sisda.alokasi-air');
})->name('alokasi-air');


Route::get('/webgis', function () {
    return view('layanan-aplikasi.webgis');
})->name('webgis');

Route::get('/sih3', function () {
    return view('layanan-aplikasi.sih3');
})->name('sih3');

Route::get('/laporan-bencana', function () {
    return view('layanan-aplikasi.laporan-bencana');
})->name('laporan-bencana');

//route Publikasi

Route::get('/pola', function () {
    return view('publikasi.info-sda.pola');
})->name('pola');

Route::get('/rpsda', function () {
    return view('publikasi.info-sda.rpsda');
})->name('rpsda');

Route::get('/sebaran-perijinan', function () {
    return view('publikasi.info-sda.sebaran-perijinan');
})->name('sebaran-perijinan');


Route::get('/laporan-banjir', function () {
    return view('publikasi.laporan-satgas.laporan-banjir');
})->name('laporan-banjir');

Route::get('/laporan-kekeringan', function () {
    return view('publikasi.laporan-satgas.laporan-kekeringan');
})->name('laporan-kekeringan');


Route::get('/majalah-pesut', function () {
    return view('publikasi.media-informasi.majalah-pesut');
})->name('majalah-pesut');

Route::get('/buku-data', function () {
    return view('publikasi.media-informasi.buku-data');
})->name('buku-data');

Route::get('/publikasi-hidrologi', function () {
    return view('publikasi.media-informasi.publikasi-hidro');
})->name('publikasi-hidrologi');


Route::get('/galery-foto', function () {
    return view('publikasi.galery.galery-foto');
})->name('galery-foto');

Route::get('/galery-video', function () {
    return view('publikasi.galery.galery-video');
})->name('galery-video');


Route::get('/kinerja-balai', function () {
    return view('publikasi.hasil-survey-kepuasan.kinerja-balai');
})->name('kinerja-balai');

Route::get('/pelayanan-perijinan', function () {
    return view('publikasi.hasil-survey-kepuasan.pelayanan-perijinan');
})->name('pelayanan-perijinan');

Route::get('/pelayanan-data', function () {
    return view('publikasi.hasil-survey-kepuasan.pelayanan-data');
})->name('pelayanan-data');

Route::get('/tata-kelola-infrastruktur', function () {
    return view('publikasi.hasil-survey-kepuasan.tata-kelola-infrastruktur');
})->name('tata-kelola-infrastruktur');

Route::get('/layanan-barjas', function () {
    return view('publikasi.hasil-survey-kepuasan.layanan-barjas');
})->name('layanan-barjas');

Route::get('/layanan-tanggap-darurat-pasca-bencana', function () {
    return view('publikasi.hasil-survey-kepuasan.layanan-tanggap-darurat-pasca-bencana');
})->name('layanan-tanggap-darurat-pasca-bencana');



//route Pengaduan

Route::get('/lapor', function () {
    return view('pengaduan.lapor');
})->name('lapor');

Route::get('/gratifikasi', function () {
    return view('pengaduan.gratifikasi');
})->name('gratifikasi');

Route::get('/wbs', function () {
    return view('pengaduan.wbs');
})->name('wbs');

Route::get('/lapor-kabalai', function () {
    return view('pengaduan.lapor-kabalai');
})->name('lapor-kabalai');



