<?php

namespace App\Filament\Resources\PelayananSdaResource\Pages;

use App\Filament\Resources\PelayananSdaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelayananSdas extends ListRecords
{
    protected static string $resource = PelayananSdaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
