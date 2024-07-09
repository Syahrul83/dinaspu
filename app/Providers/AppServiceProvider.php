<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Kontak;
use App\Observers\PostObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Filament\Support\View\Components\Modal;

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
        Modal::closedByClickingAway(false);
        Post::observe(PostObserver::class);
        Paginator::useBootstrap();

        $kontak = Kontak::first();
        // Sharing is caring
        View::share('kontak', $kontak);

        $sidebar = Post::where('kategori_id', 1)->where('status', 'publish')->latest()->take(4)->get();
        View::share('sidebar', $sidebar);
    }
}
