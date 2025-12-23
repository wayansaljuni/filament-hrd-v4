<?php

namespace App\Filament\Resources\Pengajuanabsens\Pages;

use App\Filament\Resources\Pengajuanabsens\PengajuanabsenResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengajuanabsens extends ListRecords
{
    protected static string $resource = PengajuanabsenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
