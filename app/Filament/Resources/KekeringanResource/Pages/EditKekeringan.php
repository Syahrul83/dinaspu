<?php

namespace App\Filament\Resources\KekeringanResource\Pages;

use App\Filament\Resources\KekeringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKekeringan extends EditRecord
{
    protected static string $resource = KekeringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
