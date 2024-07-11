<?php

namespace App\Filament\Resources\PelayananPengadaanResource\Pages;

use App\Filament\Resources\PelayananPengadaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelayananPengadaan extends EditRecord
{
    protected static string $resource = PelayananPengadaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
