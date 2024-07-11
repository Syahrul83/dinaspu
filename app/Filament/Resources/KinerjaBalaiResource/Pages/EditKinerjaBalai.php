<?php

namespace App\Filament\Resources\KinerjaBalaiResource\Pages;

use App\Filament\Resources\KinerjaBalaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKinerjaBalai extends EditRecord
{
    protected static string $resource = KinerjaBalaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
