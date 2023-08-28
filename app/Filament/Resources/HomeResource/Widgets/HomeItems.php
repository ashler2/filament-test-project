<?php

namespace App\Filament\Resources\HomeResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class HomeItems extends Widget
{
    protected static string $view = 'filament.resources.home-resource.widgets.home-items';
    public ?Model $record = null;

    protected function getViewData(): array
    {
        return [
            'itemCount' => $this->record->items()->count(),
        ];
    }

}
