<?php

namespace App\Filament\Resources\Jenisabsens\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class JenisabsensTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('jns')
                    ->label('Jenis Code')
                    ->searchable()->sortable(),
                TextColumn::make('ket')
                    ->label('Keterangan')
                    ->searchable()->sortable(),
                TextColumn::make('aktif')
                    ->label('Active')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state == 1 ? 'Active' : 'Inactive')
                    ->color(fn ($state) => $state == 1 ? 'success' : 'danger')
                    ->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
