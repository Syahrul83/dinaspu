<?php

namespace App\Http\Controllers;

use App\Models\Banjir;
use App\Models\BukuData;
use App\Models\Kekeringan;
use App\Models\MajalahPesut;
use App\Models\PublikasiHidrologi;
use App\Models\Sda;
use App\Models\Post;
use App\Models\Video;
use App\Models\Header;
use App\Models\Kontak;
use App\Models\Halaman;
use App\Models\Infografis;
use Illuminate\Http\Request;

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

        return view('home.halaman.page', compact('post'));
    }


    public function sda($id)
    {
        $post = Sda::where('id', $id)->firstOrFail();

        return view('home.publikasi.sda', compact('post'));
    }


    public function lapSatgas($name)
    {
        if ($name == 'banjir') {
            $posts = Banjir::latest()->paginate(15);
        } elseif ($name == 'kekeringan') {
            $posts = Kekeringan::latest()->paginate(15);
        } elseif ($name == 'majalah-pesut') {
            $posts = MajalahPesut::latest()->paginate(15);
        } elseif ($name == 'buku-data') {
            $posts = BukuData::latest()->paginate(15);
        } elseif ($name == 'publikasi-hidrologi') {
            $posts = PublikasiHidrologi::latest()->paginate(15);
        }



        return view('home.publikasi.laporan-satgas', compact('posts'));
    }
}
