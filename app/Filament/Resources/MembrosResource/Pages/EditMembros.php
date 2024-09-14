<?php

namespace App\Filament\Resources\MembrosResource\Pages;

use App\Filament\Resources\MembrosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembros extends EditRecord
{
    protected static string $resource = MembrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
