<?php

namespace App\Filament\Resources\BanjirResource\Pages;

use App\Filament\Resources\BanjirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBanjir extends EditRecord
{
    protected static string $resource = BanjirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
