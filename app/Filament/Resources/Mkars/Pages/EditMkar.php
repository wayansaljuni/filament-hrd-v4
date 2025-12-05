<?php

namespace App\Filament\Resources\Mkars\Pages;

use App\Filament\Resources\Mkars\MkarResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMkar extends EditRecord
{
    protected static string $resource = MkarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
