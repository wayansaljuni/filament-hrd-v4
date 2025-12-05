<?php

namespace App\Filament\Resources\Mkars\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MkarInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nik'),
                TextEntry::make('kdcab'),
                TextEntry::make('kdun'),
                TextEntry::make('kddep'),
                TextEntry::make('ket'),
                TextEntry::make('file_foto'),
                TextEntry::make('tglklr')
                    ->date(),
            ]);
    }
}
