<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use App\Filament\Resources\MenuResource;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\Authenticate;


use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Datlechin\FilamentMenuBuilder\FilamentMenuBuilderPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('bwsadmin')
            ->path('bwsadmin')
            ->brandName('BWS Kalimantan')
            ->favicon(asset('favicon_io/favicon.ico'))
            ->login()
            ->profile()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Berita & Informasi')
                    ->collapsed(false),
                NavigationGroup::make()
                    ->label('Halaman Depan')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Menu & Halaman')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Publikasi')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Hasil Survey Kepuasan')
                    ->collapsed(),
                NavigationGroup::make()->label('Setting')
                    ->collapsed(),
                NavigationGroup::make()->label('Pelindung'),
            ])
            // ->navigationGroups([
            //     'Berita & Informasi',
            //     'Halaman Depan',
            //     'Menu & Halaman',
            //     'Publikasi',
            //     'Settings',
            // ])
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
                FilamentMenuBuilderPlugin::make()
                    ->addLocation('header', 'Header')
                    ->addLocation('footer', 'Footer')
                    ->usingResource(MenuResource::class)
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
