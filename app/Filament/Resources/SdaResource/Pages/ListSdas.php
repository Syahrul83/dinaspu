<?php

namespace App\Filament\Resources\SdaResource\Pages;

use App\Filament\Resources\SdaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSdas extends ListRecords
{
    protected static string $resource = SdaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
