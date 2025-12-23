<?php

namespace App\Filament\Resources\Pengajuanabsens\Pages;

use App\Filament\Resources\Pengajuanabsens\PengajuanabsenResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPengajuanabsen extends ViewRecord
{
    protected static string $resource = PengajuanabsenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
