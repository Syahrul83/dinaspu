<?php

namespace App\Filament\Resources\PelayananBencanaResource\Pages;

use App\Filament\Resources\PelayananBencanaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelayananBencanas extends ListRecords
{
    protected static string $resource = PelayananBencanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
