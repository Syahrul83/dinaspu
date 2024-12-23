<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class MenuOrder extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.menu-order';

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
