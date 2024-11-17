<?php

namespace App\Http\Controllers;

use App\Models\KinerjaBalai;
use App\Models\PelayananBencana;
use App\Models\PelayananData;
use App\Models\PelayananPegadaan;
use App\Models\PelayananPerijinan;
use App\Models\PelayananSda;
use App\Models\Sda;
use App\Models\Foto;
use App\Models\Post;
use App\Models\Video;
use App\Models\Banjir;
use App\Models\Header;
use App\Models\Kontak;
use App\Models\Halaman;
use App\Models\BukuData;
use App\Models\Infografis;
use App\Models\Kekeringan;
use App\Models\MajalahPesut;
use Illuminate\Http\Request;
use App\Models\PublikasiHidrologi;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::where('kategori_id', 1)->where('status', 'publish')->latest()->take(4)->get();
        $zona = Post::where('kategori_id', 2)->where('status', 'publish')->latest()->take(12)->get();
        $flash = Post::where('kategori_id', 3)->where('status', 'publish')->latest()->take(8)->get();
        $infografis = Infografis::limit(4)->get();
        $header = Header::limit(4)->get();
        $video = Video::latest()->first();
        // dd($kontak);
        return view('home.index', compact('posts', 'infografis', 'header', 'video', 'zona', 'flash'));
    }


    public function semuaBerita()
    {
        $posts = Post::where('kategori_id', 1)->where('status', 'publish')->latest()->paginate(9);

        return view('home.content.semua-berita', compact('posts'));
    }


    public function selengkapBerita($id)
    {
        $post = Post::where('id', $id)->where('status', 'publish')->firstOrFail();

        return view('home.content.selengkapPost', compact('post'));
    }


    public function page($id)
    {
        $post = Halaman::where('id', $id)->where('active', '1')->firstOrFail();

        if ($post->link_active == true) {
            return redirect()->away($post->link);
        } else {
            return view('home.halaman.page', compact('post'));
        }



    }


    public function sda($id)
    {
        $post = Sda::where('id', $id)->firstOrFail();

        return view('home.publikasi.sda', compact('post'));
    }


    public function lapSatgas($name)
    {

        if ($name == 'banjir') {
            $title = 'LAPORAN BANJIR';
            $posts = Banjir::latest()->paginate(15);
        } elseif ($name == 'kekeringan') {
            $title = 'LAPORAN KEKERINGAN';
            $posts = Kekeringan::latest()->paginate(15);
        } elseif ($name == 'majalah-pesut') {
            $title = 'MAJALAH PESUT';
            $posts = MajalahPesut::latest()->paginate(15);
        } elseif ($name == 'buku-data') {
            $title = 'BUKU DATA';
            $posts = BukuData::latest()->paginate(15);
        } elseif ($name == 'publikasi-hidrologi') {
            $title = 'PUBLIKASI HIDROLOGI';
            $posts = PublikasiHidrologi::latest()->paginate(15);
        }



        return view('home.publikasi.laporan-satgas', compact('posts', 'title'));
    }


    public function galleri($name)
    {
        if ($name == 'foto') {
            $posts = Foto::latest()->paginate(12);
            return view('home.galleri.galery-foto', compact('posts'));
        } else {
            $posts = Video::latest()->paginate(12);
            return view('home.galleri.galery-video', compact('posts'));
        }
    }


    public function surveyKepuasan($name)
    {
        if ($name == 'kinerja-balai') {
            $title = 'LAPORAN SURVEY KEPUASAN KINERJA BALAI';
            $posts = KinerjaBalai::latest()->paginate(15);
        } elseif ($name == 'perijinan') {
            $title = 'LAPORAN SURVEY KEPUASAN PELAYANAN PERIJINAN';
            $posts = PelayananPerijinan::latest()->paginate(15);
        } elseif ($name == 'data') {
            $title = 'LAPORAN SURVEY KEPUASAN PELAYANAN DATA';
            $posts = PelayananData::latest()->paginate(15);
        } elseif ($name == 'sda') {
            $title = 'LAPORAN SURVEY KEPUASAN TATA KELOLA INFRASTRUKTUR SDA';
            $posts = PelayananSda::latest()->paginate(15);
        } elseif ($name == 'barang-jasa') {
            $title = 'LAPORAN SURVEY KEPUASAN LAYANAN PENGADAAN BARANG DAN JASA';
            $posts = PelayananPegadaan::latest()->paginate(15);
        } elseif ($name == 'pasca-bencana') {
            $title = ' LAPORAN SURVEY KEPUASAN TANGGAP DARURAT PASCA BENCANA';
            $posts = PelayananBencana::latest()->paginate(15);
        }



        return view('home.layanan.laporan-survey', compact('posts', 'title'));
    }





}
