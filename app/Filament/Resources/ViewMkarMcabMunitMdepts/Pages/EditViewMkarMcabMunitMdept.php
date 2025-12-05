<?php

namespace App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages;

use App\Filament\Resources\ViewMkarMcabMunitMdepts\ViewMkarMcabMunitMdeptResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditViewMkarMcabMunitMdept extends EditRecord
{
    protected static string $resource = ViewMkarMcabMunitMdeptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // ViewAction::make(),
            // DeleteAction::make(),
        ];
    }
}
