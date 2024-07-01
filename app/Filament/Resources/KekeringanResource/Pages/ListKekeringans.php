<?php

namespace App\Filament\Resources\KekeringanResource\Pages;

use App\Filament\Resources\KekeringanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKekeringans extends ListRecords
{
    protected static string $resource = KekeringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
