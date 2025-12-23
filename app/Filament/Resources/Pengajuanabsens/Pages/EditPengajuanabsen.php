<?php

namespace App\Filament\Resources\Pengajuanabsens\Pages;

use App\Filament\Resources\Pengajuanabsens\PengajuanabsenResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPengajuanabsen extends EditRecord
{
    protected static string $resource = PengajuanabsenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
