<?php

namespace App\Filament\Resources\PelayananSdaResource\Pages;

use App\Filament\Resources\PelayananSdaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelayananSda extends EditRecord
{
    protected static string $resource = PelayananSdaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
