<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Resources\RelationManagers\RelationGroup;

class ViewHome extends ViewRecord
{
    protected static string $resource = HomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
