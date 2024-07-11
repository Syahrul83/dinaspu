<?php

namespace App\Filament\Resources\PelayananDataResource\Pages;

use App\Filament\Resources\PelayananDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelayananData extends EditRecord
{
    protected static string $resource = PelayananDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
