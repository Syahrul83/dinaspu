<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Header;
use App\Models\Kontak;
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
}
