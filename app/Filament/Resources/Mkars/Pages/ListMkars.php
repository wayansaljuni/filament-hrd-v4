<?php

namespace App\Filament\Resources\Mkars\Pages;

use App\Filament\Resources\Mkars\MkarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMkars extends ListRecords
{
    protected static string $resource = MkarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

}
