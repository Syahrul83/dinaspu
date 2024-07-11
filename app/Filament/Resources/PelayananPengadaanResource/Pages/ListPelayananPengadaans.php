<?php

namespace App\Filament\Resources\PelayananPengadaanResource\Pages;

use App\Filament\Resources\PelayananPengadaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelayananPengadaans extends ListRecords
{
    protected static string $resource = PelayananPengadaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
