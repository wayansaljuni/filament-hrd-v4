<?php

namespace App\Filament\Resources\Jenisabsens\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class JenisabsenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jns')
                    ->label('Jenis Absen')->required(),
                TextInput::make('ket')
                    ->label('Keterangan')->required(),
                Select::make('aktif')
                    ->label('Active')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])
                    ->required()
                    ->default(1) 
            ])->columns(2);
    }
}   
