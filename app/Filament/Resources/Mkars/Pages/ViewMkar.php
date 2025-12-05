<?php

namespace App\Filament\Resources\Mkars\Pages;

use App\Filament\Resources\Mkars\MkarResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMkar extends ViewRecord
{
    protected static string $resource = MkarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
