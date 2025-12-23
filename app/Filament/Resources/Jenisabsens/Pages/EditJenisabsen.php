<?php

namespace App\Filament\Resources\Jenisabsens\Pages;

use App\Filament\Resources\Jenisabsens\JenisabsenResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditJenisabsen extends EditRecord
{
    protected static string $resource = JenisabsenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
