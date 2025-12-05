<?php

namespace App\Filament\Resources\Mcabs\Pages;

use App\Filament\Resources\Mcabs\McabResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMcab extends ViewRecord
{
    protected static string $resource = McabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
