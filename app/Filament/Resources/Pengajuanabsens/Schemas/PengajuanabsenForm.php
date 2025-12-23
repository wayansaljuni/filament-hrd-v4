<?php

namespace App\Filament\Resources\Pengajuanabsens\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PengajuanabsenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nik')
                    ->required(),
                TextInput::make('kddep')
                    ->required(),
                TextInput::make('nm_atasan')
                    ->required(),
                TextInput::make('hak')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('lbr')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('tot')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('ambil')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('sisa')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('lama')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                DatePicker::make('tawal'),
                DatePicker::make('takhir'),
                DateTimePicker::make('jawal'),
                DateTimePicker::make('jakhir'),
                TextInput::make('alasan')
                    ->required(),
                TextInput::make('alasan1')
                    ->required(),
                TextInput::make('alamat')
                    ->required(),
                TextInput::make('telp')
                    ->tel()
                    ->required(),
                DateTimePicker::make('tgl'),
                TextInput::make('kota')
                    ->required()
                    ->numeric()
                    ->default(0),
                DateTimePicker::make('tg'),
                TextInput::make('user')
                    ->required(),
                TextInput::make('shift')
                    ->required(),
                TextInput::make('jns')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('approve')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('thn_ini')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('user_app')
                    ->required(),
                TextInput::make('kdun')
                    ->required(),
                Toggle::make('notapprove')
                    ->required(),
                Toggle::make('jns1')
                    ->required(),
                DateTimePicker::make('tgapprove'),
            ]);
    }
}
