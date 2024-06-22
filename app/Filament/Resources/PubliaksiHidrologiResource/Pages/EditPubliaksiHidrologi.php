<?php

namespace App\Filament\Resources\PubliaksiHidrologiResource\Pages;

use App\Filament\Resources\PubliaksiHidrologiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPubliaksiHidrologi extends EditRecord
{
    protected static string $resource = PubliaksiHidrologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
