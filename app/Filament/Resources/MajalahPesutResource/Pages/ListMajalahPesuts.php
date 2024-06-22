<?php

namespace App\Filament\Resources\MajalahPesutResource\Pages;

use App\Filament\Resources\MajalahPesutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMajalahPesuts extends ListRecords
{
    protected static string $resource = MajalahPesutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
