<?php

namespace App\Filament\Resources\Jenisabsens;

use BackedEnum;
use App\Models\Jenisabsen;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\Jenisabsens\Pages\EditJenisabsen;
use App\Filament\Resources\Jenisabsens\Pages\ViewJenisabsen;
use App\Filament\Resources\Jenisabsens\Pages\ListJenisabsens;
use App\Filament\Resources\Jenisabsens\Pages\CreateJenisabsen;
use App\Filament\Resources\Jenisabsens\Schemas\JenisabsenForm;
use App\Filament\Resources\Jenisabsens\Tables\JenisabsensTable;
use App\Filament\Resources\Jenisabsens\Schemas\JenisabsenInfolist;

class JenisabsenResource extends Resource
{
    protected static ?string $model = Jenisabsen::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::FingerPrint;
    protected static ?string $recordTitleAttribute = 'ket';
    protected static string|\UnitEnum|null $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Jenis Absen';
    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        return Jenisabsen::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary'; // primary, success, warning, danger
    }
    
    public static function getPluralModelLabel(): string
    {
        return 'Jenis Absen';
    }
    public static function getModelLabel(): string
    {
        return '';
    }
    public static function form(Schema $schema): Schema
    {
        return JenisabsenForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JenisabsenInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JenisabsensTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJenisabsens::route('/'),
            'create' => CreateJenisabsen::route('/create'),
            'view' => ViewJenisabsen::route('/{record}'),
            'edit' => EditJenisabsen::route('/{record}/edit'),
        ];
    }
}
