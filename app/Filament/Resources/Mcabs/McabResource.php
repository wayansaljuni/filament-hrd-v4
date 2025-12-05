<?php

namespace App\Filament\Resources\Mcabs;

use App\Filament\Resources\Mcabs\Pages\CreateMcab;
use App\Filament\Resources\Mcabs\Pages\EditMcab;
use App\Filament\Resources\Mcabs\Pages\ListMcabs;
use App\Filament\Resources\Mcabs\Pages\ViewMcab;
use App\Filament\Resources\Mcabs\Schemas\McabForm;
use App\Filament\Resources\Mcabs\Schemas\McabInfolist;
use App\Filament\Resources\Mcabs\Tables\McabsTable;
use App\Models\Mcab;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class McabResource extends Resource
{
    protected static ?string $model = Mcab::class;

    protected static ?string $recordTitleAttribute = 'ket';
    
    protected static ?string $navigationLabel = 'Data Cabang';

    public static function getNavigationBadge(): ?string
    {
        // return static::getModel()::count();
        return Mcab::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return 'success'; // primary, success, warning, danger
    }
    
    public static function getPluralModelLabel(): string
    {
        return 'Cabang';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-building-office-2'; // ganti icon di sini
    }

    public static function getModelLabel(): string
    {
        return '';
    }

    public static function form(Schema $schema): Schema
    {
        return McabForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return McabInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return McabsTable::configure($table);
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
            'index' => ListMcabs::route('/'),
            'create' => CreateMcab::route('/create'),
            'view' => ViewMcab::route('/{record}'),
            'edit' => EditMcab::route('/{record}/edit'),
        ];
    }
}
