<?php

namespace App\Filament\Resources\Mkars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MkarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function ($query) {
                    $query->select(['nik','kdcab','kdun','kddep','ket', 'alrm', 'tglklr'])
                        ->where('tglklr', '0000-00-00');
                })        
            ->columns([
                TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable()->sortable(),
                TextColumn::make('mcab.ket')
                    ->label('CABANG')
                    ->searchable()->sortable(),
                TextColumn::make('kdun')
                    ->label('UNIT')
                    ->searchable()->sortable(),
                TextColumn::make('kddep')
                    ->label('DEPARTEMEN')
                    ->searchable()->sortable(),
                TextColumn::make('ket')
                    ->label('NAMA KARYAWAN')
                    ->searchable()->sortable(),
                TextColumn::make('alrm')
                    ->label('ALAMAT RUMAH')
                    ->searchable()->sortable(),
                TextColumn::make('tglklr')
                    ->label('TGL KELUAR')
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
