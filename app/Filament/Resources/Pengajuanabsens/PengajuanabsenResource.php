<?php

namespace App\Filament\Resources\Pengajuanabsens;

use BackedEnum;
use Carbon\Carbon;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\Pengajuanabsen;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\Pengajuanabsens\Pages\EditPengajuanabsen;
use App\Filament\Resources\Pengajuanabsens\Pages\ViewPengajuanabsen;
use App\Filament\Resources\Pengajuanabsens\Pages\ListPengajuanabsens;
use App\Filament\Resources\Pengajuanabsens\Pages\CreatePengajuanabsen;
use App\Filament\Resources\Pengajuanabsens\Schemas\PengajuanabsenForm;
use App\Filament\Resources\Pengajuanabsens\Tables\PengajuanabsensTable;
use App\Filament\Resources\Pengajuanabsens\Schemas\PengajuanabsenInfolist;

class PengajuanabsenResource extends Resource
{
    protected static ?string $model = Pengajuanabsen::class;
    protected static ?string $recordTitleAttribute = 'ket';
    protected static string|\UnitEnum|null $navigationGroup = 'Transaksi Data';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Pengajuan Absensi';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArchiveBox;

    public static function form(Schema $schema): Schema
    {
        return PengajuanabsenForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PengajuanabsenInfolist::configure($schema);
    }
    public static function getPluralModelLabel(): string
    {
        return 'Pengajuan Absensi';
    }
    public static function getModelLabel(): string
    {
        return '';
    }

    public static function table(Table $table): Table
    {
        return PengajuanabsensTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        // Mengambil query dasar
        $query = parent::getEloquentQuery();
            // ->with('Jenisabsen');

        // Pastikan user sudah login
        if ($user = Auth::user()) {
            
            // if (! $user->hasRole('super_admin')) {
                $query->where('nik', $user->nik);
            // }
            $query->whereYear('takhir', Carbon::now()->year)
                ->orderBy('id', 'desc');
        }

        return $query;
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
            'index' => ListPengajuanabsens::route('/'),
            'create' => CreatePengajuanabsen::route('/create'),
            'view' => ViewPengajuanabsen::route('/{record}'),
            'edit' => EditPengajuanabsen::route('/{record}/edit'),
        ];
    }
}
