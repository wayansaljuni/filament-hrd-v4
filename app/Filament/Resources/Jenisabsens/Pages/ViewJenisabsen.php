<?php

namespace App\Filament\Resources\Jenisabsens\Pages;

use App\Filament\Resources\Jenisabsens\JenisabsenResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisabsen extends ViewRecord
{
    protected static string $resource = JenisabsenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
