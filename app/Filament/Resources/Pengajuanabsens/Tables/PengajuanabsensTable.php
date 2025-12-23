<?php

namespace App\Filament\Resources\Pengajuanabsens\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PengajuanabsensTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('nik')->label('NIK')->sortable()->searchable(),
            TextColumn::make('mkar.ket')->label('Nama Karyawan')->sortable()->searchable(),
            TextColumn::make('mdept.ket')->label('Departemen')->sortable()->searchable(),
            TextColumn::make('nm_atasan')->label('Atasan')->sortable()->searchable(),
            TextColumn::make('lama')->label('Lama (Hari)')->sortable()->searchable(),
            TextColumn::make('tawal')->label('Tgl Awal')->date('d M Y')->sortable()->searchable(),
            TextColumn::make('takhir')->label('Tgl Akhir')->date('d M Y')->sortable()->searchable(),
            TextColumn::make('alasan')->label('Alasan')->sortable()->searchable()->limit(30), // membatasi teks panjang
            TextColumn::make('jenisabsen.ket')->label('Jenis Absensi')->sortable()->searchable(),
            TextColumn::make('approve')
                ->label('Status')
                ->badge()
                ->formatStateUsing(fn ($state) => $state == 1 ? 'Approved' : '')
                ->color(fn (string $state): string => match ($state) {
                    '1' => 'success', // Misal 1 adalah Setuju
                    '0' => 'danger',  // Misal 0 adalah Tolak
                    default => 'warning',
                }),
            TextColumn::make('user_app')->label('Approve Oleh')->sortable()->searchable(),
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
