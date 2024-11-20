<?php


namespace App\Filament\Plugins\Resources;


use Illuminate\Support\Facades\Auth;
use Datlechin\FilamentMenuBuilder\Resources\MenuResource as BaseMenuResource;

class MenuResource extends BaseMenuResource
{
    protected static ?string $navigationGroup = 'Menu & Halaman';


    public static function canAccess(): bool
    {
        if (
            Auth::user()->roles->pluck('name')[0] == 'admin' or
            Auth::user()->roles->pluck('name')[0] == 'super_admin'
        ) {
            return true;
        } else {
            return false;
        }
    }


    public static function shouldRegisterNavigation(): bool
    {
        if (
            Auth::user()->roles->pluck('name')[0] == 'admin' or
            Auth::user()->roles->pluck('name')[0] == 'super_admin'
        ) {
            return true;
        } else {
            return false;
        }

    }

    public static function getNavigationBadge(): ?string
    {

        return number_format(static::getModel()::count());
    }
}
