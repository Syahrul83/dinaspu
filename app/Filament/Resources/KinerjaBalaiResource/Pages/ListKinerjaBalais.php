<?php

namespace App\Filament\Resources\KinerjaBalaiResource\Pages;

use App\Filament\Resources\KinerjaBalaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKinerjaBalais extends ListRecords
{
    protected static string $resource = KinerjaBalaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
