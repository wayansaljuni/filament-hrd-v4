<?php

namespace App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages;

use App\Filament\Resources\ViewMkarMcabMunitMdepts\ViewMkarMcabMunitMdeptResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListViewMkarMcabMunitMdepts extends ListRecords
{
    protected static string $resource = ViewMkarMcabMunitMdeptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
