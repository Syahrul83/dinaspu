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

        $post = Post::all();
        $infografis = Infografis::limit(4)->get();
        $header = Header::limit(4)->get();
        $video = Video::latest();
        // dd($kontak);
        return view('home.index', compact('post', 'infografis', 'header', 'video'));
    }
}
