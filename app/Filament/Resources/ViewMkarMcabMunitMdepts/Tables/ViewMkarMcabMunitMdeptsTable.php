<?php

namespace App\Filament\Resources\ViewMkarMcabMunitMdepts\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class ViewMkarMcabMunitMdeptsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function ($query) {
                    $query->select(['nik','ket','namacab','namaunit','namadept', 'tglklr'])
                        ->where('tglklr', '0000-00-00');
                })        
            ->columns([
                TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable()->sortable(),
                TextColumn::make('ket')
                    ->label('NAMA KARYAWAN')
                    ->searchable()->sortable(),
                TextColumn::make('namacab')
                    ->label('CABANG')
                    ->searchable()->sortable(),
                TextColumn::make('namaunit')
                    ->label('UNIT')
                    ->searchable()->sortable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                // EditAction::make(),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
