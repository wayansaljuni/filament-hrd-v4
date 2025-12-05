<?php

namespace App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages;

use App\Filament\Resources\ViewMkarMcabMunitMdepts\ViewMkarMcabMunitMdeptResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewViewMkarMcabMunitMdept extends ViewRecord
{
    protected static string $resource = ViewMkarMcabMunitMdeptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
}
