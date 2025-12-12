<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\Mkar;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('nik')
                    ->label('NIK')
                    ->searchable()
                    ->getSearchResultsUsing(fn (string $search) =>
                        Mkar::where('tglklr', '0000-00-00')
                            ->where('ket', 'like', "%{$search}%")
                            ->orWhere('nik', 'like', "%{$search}%")
                            ->limit(50)
                            ->pluck('ket', 'nik')
                    )
                    ->getOptionLabelUsing(fn ($value) =>Mkar::find($value)?->ket)
                    ->required(),

                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                        ->required(),
            // 🔥 Role
                Select::make('roles')
                    ->label('Roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload()
                    ->searchable(),

                // 🔥 Permission langsung (opsional)
                Select::make('permissions')
                    ->label('Permissions')
                    ->multiple()
                    ->relationship('permissions', 'name')
                    ->preload()
                    ->searchable(),
                ]);
    }
}
