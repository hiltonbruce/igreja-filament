<?php

namespace App\Filament\Resources\MembrosResource\Pages;

use App\Filament\Resources\MembrosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembros extends ListRecords
{
    protected static string $resource = MembrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
