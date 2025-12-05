<?php

namespace App\Filament\Resources\Mcabs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class McabForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kdcab')
                    ->label('Kode Cabang')->required(),
                TextInput::make('ket')
                    ->label('Nama Cabang')->required(),
            ])->columns(3);
    }
}
