<?php

namespace App\Filament\Resources\PubliaksiHidrologiResource\Pages;

use App\Filament\Resources\PubliaksiHidrologiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPubliaksiHidrologis extends ListRecords
{
    protected static string $resource = PubliaksiHidrologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
