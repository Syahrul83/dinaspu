<?php

namespace App\Filament\Resources\PelayananDataResource\Pages;

use App\Filament\Resources\PelayananDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelayananData extends ListRecords
{
    protected static string $resource = PelayananDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
