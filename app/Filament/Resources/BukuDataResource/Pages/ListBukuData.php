<?php

namespace App\Filament\Resources\BukuDataResource\Pages;

use App\Filament\Resources\BukuDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBukuData extends ListRecords
{
    protected static string $resource = BukuDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
