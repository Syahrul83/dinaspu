<?php

namespace App\Filament\Resources\PelayananBencanaResource\Pages;

use App\Filament\Resources\PelayananBencanaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelayananBencana extends EditRecord
{
    protected static string $resource = PelayananBencanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
