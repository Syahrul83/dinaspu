<?php

namespace App\Filament\Resources\PelayananPerijinanResource\Pages;

use App\Filament\Resources\PelayananPerijinanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelayananPerijinans extends ListRecords
{
    protected static string $resource = PelayananPerijinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
