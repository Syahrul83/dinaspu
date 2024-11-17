<?php

namespace App\Filament\Resources\KmpsResource\Pages;

use App\Filament\Resources\KmpsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKmps extends EditRecord
{
    protected static string $resource = KmpsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
