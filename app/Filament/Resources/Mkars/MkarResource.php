<?php

namespace App\Filament\Resources\Mkars;

use App\Filament\Resources\Mkars\Pages\CreateMkar;
use App\Filament\Resources\Mkars\Pages\EditMkar;
use App\Filament\Resources\Mkars\Pages\ListMkars;
use App\Filament\Resources\Mkars\Pages\ViewMkar;
use App\Filament\Resources\Mkars\Schemas\MkarForm;
use App\Filament\Resources\Mkars\Schemas\MkarInfolist;
use App\Filament\Resources\Mkars\Tables\MkarsTable;
use App\Models\Mkar;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MkarResource extends Resource
{
    protected static ?string $model = Mkar::class;
    protected static ?string $recordTitleAttribute = 'ket';
    protected static string|\UnitEnum|null $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Karyawan';

    public static function form(Schema $schema): Schema
    {
        return MkarForm::configure($schema);
    }
    public static function getNavigationBadge(): ?string
    {
        // return static::getModel()::count();
        return Mkar::where('tglklr', '0000-00-00')->count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary'; // primary, success, warning, danger
    }
    
    public static function getPluralModelLabel(): string
    {
        return 'Karyawan';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-user-group'; // ganti icon di sini
    }

    public static function getModelLabel(): string
    {
        return '';
    }

    public static function infolist(Schema $schema): Schema
    {
        return MkarInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MkarsTable::configure($table);
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
            'index' => ListMkars::route('/'),
            'create' => CreateMkar::route('/create'),
            'view' => ViewMkar::route('/{record}'),
            'edit' => EditMkar::route('/{record}/edit'),
        ];
    }
}
