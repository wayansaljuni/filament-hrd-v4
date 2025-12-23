<?php

namespace App\Filament\Resources\Pengajuanabsens\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PengajuanabsenInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nik'),
                TextEntry::make('kddep'),
                TextEntry::make('nm_atasan'),
                TextEntry::make('hak')
                    ->numeric(),
                TextEntry::make('lbr')
                    ->numeric(),
                TextEntry::make('tot')
                    ->numeric(),
                TextEntry::make('ambil')
                    ->numeric(),
                TextEntry::make('sisa')
                    ->numeric(),
                TextEntry::make('lama')
                    ->numeric(),
                TextEntry::make('tawal')
                    ->date(),
                TextEntry::make('takhir')
                    ->date(),
                TextEntry::make('jawal')
                    ->dateTime(),
                TextEntry::make('jakhir')
                    ->dateTime(),
                TextEntry::make('alasan'),
                TextEntry::make('alasan1'),
                TextEntry::make('alamat'),
                TextEntry::make('telp'),
                TextEntry::make('tgl')
                    ->dateTime(),
                TextEntry::make('kota')
                    ->numeric(),
                TextEntry::make('tg')
                    ->dateTime(),
                TextEntry::make('user'),
                TextEntry::make('shift'),
                TextEntry::make('jns')
                    ->numeric(),
                TextEntry::make('approve')
                    ->numeric(),
                TextEntry::make('thn_ini')
                    ->numeric(),
                TextEntry::make('user_app'),
                TextEntry::make('kdun'),
                IconEntry::make('notapprove')
                    ->boolean(),
                IconEntry::make('jns1')
                    ->boolean(),
                TextEntry::make('tgapprove')
                    ->dateTime(),
            ]);
    }
}
