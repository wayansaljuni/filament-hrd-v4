<?php

namespace App\Filament\Resources\Mcabs\Pages;

use App\Filament\Resources\Mcabs\McabResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMcabs extends ListRecords
{
    protected static string $resource = McabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
