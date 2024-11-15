<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Tugas;
use App\Models\Kontak;
use App\Models\MenuLink;
use App\Observers\PostObserver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Filament\Support\View\Components\Modal;
use Datlechin\FilamentMenuBuilder\Models\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        $menu = Menu::location('header');
        View::share('menu', $menu);
        Modal::closedByClickingAway(false);
        Post::observe(PostObserver::class);
        Paginator::useBootstrap();
        try {
            DB::connection()->getPdo();
            $kontak = Kontak::first();
            // Sharing is caring
            View::share('kontak', $kontak);

            $sidebar = Post::where('kategori_id', 1)->where('status', 'publish')->latest()->take(4)->get();
            View::share('sidebar', $sidebar);

            // polri
            // $link1 = MenuLink::where('id', 1)->pluck('link')->first();
            // View::share('link1', $link1);

            // // gratifikasi
            // $link2 = MenuLink::where('id', 2)->pluck('link')->first();
            // View::share('link2', $link2);

            // // Wisel Bloaiwng
            // $link3 = MenuLink::where('id', 3)->pluck('link')->first();
            // View::share('link3', $link3);
            $links = MenuLink::all();
            View::share('links', $links);


            $tugas = Tugas::where('active', 1)->get();
            View::share('tugas', $tugas);
        } catch (\Exception $e) {

            Log::error('Database connection error: ' . $e->getMessage());
        }

    }
}
