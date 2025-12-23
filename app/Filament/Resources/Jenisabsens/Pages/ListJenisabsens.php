<?php

namespace App\Filament\Resources\Jenisabsens\Pages;

use App\Filament\Resources\Jenisabsens\JenisabsenResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJenisabsens extends ListRecords
{
    protected static string $resource = JenisabsenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
