<?php

namespace App\Filament\Resources\ViewMkarMcabMunitMdepts;

use App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages\CreateViewMkarMcabMunitMdept;
use App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages\EditViewMkarMcabMunitMdept;
use App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages\ListViewMkarMcabMunitMdepts;
use App\Filament\Resources\ViewMkarMcabMunitMdepts\Pages\ViewViewMkarMcabMunitMdept;
use App\Filament\Resources\ViewMkarMcabMunitMdepts\Schemas\ViewMkarMcabMunitMdeptForm;
use App\Filament\Resources\ViewMkarMcabMunitMdepts\Schemas\ViewMkarMcabMunitMdeptInfolist;
use App\Filament\Resources\ViewMkarMcabMunitMdepts\Tables\ViewMkarMcabMunitMdeptsTable;
use App\Models\View_mkar_mcab_munit_mdept;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ViewMkarMcabMunitMdeptResource extends Resource
{
    protected static ?string $model = View_mkar_mcab_munit_mdept::class;

    protected static ?string $recordTitleAttribute = 'ket';
    
    protected static ?string $navigationLabel = 'Data Karyawan - View';

    public static function getNavigationBadge(): ?string
    {
        // return static::getModel()::count();
        return View_mkar_mcab_munit_mdept::where('tglklr', '0000-00-00')->count();
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

    public static function form(Schema $schema): Schema
    {
        return ViewMkarMcabMunitMdeptForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ViewMkarMcabMunitMdeptInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ViewMkarMcabMunitMdeptsTable::configure($table);
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
            'index' => ListViewMkarMcabMunitMdepts::route('/'),
            'create' => CreateViewMkarMcabMunitMdept::route('/create'),
            'view' => ViewViewMkarMcabMunitMdept::route('/{record}'),
            'edit' => EditViewMkarMcabMunitMdept::route('/{record}/edit'),
        ];
    }
}
