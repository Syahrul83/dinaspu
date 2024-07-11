<?php

namespace App\Providers;

use App\Models\Sda;
use App\Models\Foto;
use App\Models\Video;
use App\Models\Banjir;
use App\Models\Header;
use App\Models\BukuData;
use App\Models\Infografis;
use App\Models\Kekeringan;
use App\Models\KinerjaBalai;
use App\Models\MajalahPesut;
use App\Models\PelayananSda;
use App\Models\PelayananData;
use App\Observers\SdaObserver;
use App\Observers\FotoObserver;
use App\Models\PelayananBencana;
use App\Observers\VideoObserver;
use App\Models\PelayananPegadaan;
use App\Observers\BanjirObserver;
use App\Observers\HeaderObserver;
use App\Models\PelayananPerijinan;
use App\Models\PublikasiHidrologi;
use App\Observers\BukuDataObserver;
use App\Observers\InfografisObserver;
use App\Observers\KekeringanObserver;
use App\Observers\KinerjaBalaiObserver;
use App\Observers\MajalahPesutObserver;
use App\Observers\PelayananSdaObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\PelayananDataObserver;
use App\Observers\PelayananBencanaObserver;
use App\Observers\PelayananPegadaanObserver;
use App\Observers\PelayananPerijinanObserver;
use App\Observers\PublikasiHidrologiObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Banjir::observe(BanjirObserver::class);
        BukuData::observe(BukuDataObserver::class);
        Foto::observe(FotoObserver::class);
        Kekeringan::observe(KekeringanObserver::class);
        MajalahPesut::observe(MajalahPesutObserver::class);
        PublikasiHidrologi::observe(PublikasiHidrologiObserver::class);
        Sda::observe(SdaObserver::class);
        Header::observe(HeaderObserver::class);
        Infografis::observe(InfografisObserver::class);
        Video::observe(VideoObserver::class);

        KinerjaBalai::observe(KinerjaBalaiObserver::class);
        PelayananBencana::observe(PelayananBencanaObserver::class);
        PelayananData::observe(PelayananDataObserver::class);
        PelayananPegadaan::observe(PelayananPegadaanObserver::class);
        PelayananPerijinan::observe(PelayananPerijinanObserver::class);
        PelayananSda::observe(PelayananSdaObserver::class);

    }
}
