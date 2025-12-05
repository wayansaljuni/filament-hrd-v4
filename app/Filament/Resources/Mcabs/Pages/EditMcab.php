<?php

namespace App\Filament\Resources\Mcabs\Pages;

use App\Filament\Resources\Mcabs\McabResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMcab extends EditRecord
{
    protected static string $resource = McabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
