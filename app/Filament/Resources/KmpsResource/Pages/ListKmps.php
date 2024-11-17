<?php

namespace App\Filament\Resources\KmpsResource\Pages;

use App\Filament\Resources\KmpsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKmps extends ListRecords
{
    protected static string $resource = KmpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
