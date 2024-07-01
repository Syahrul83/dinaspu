<?php

namespace App\Filament\Resources\BukuDataResource\Pages;

use App\Filament\Resources\BukuDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBukuData extends EditRecord
{
    protected static string $resource = BukuDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
