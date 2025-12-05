<?php

namespace App\Filament\Resources\Mkars\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MkarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nik')
                    ->required(),
                TextInput::make('ket')
                    ->required(),
                TextInput::make('file_foto')
                    ->required(),
                TextInput::make('alrm')
                    ->required(),
                DatePicker::make('tglklr')
                    ->required(),
            ]);
    }
}
