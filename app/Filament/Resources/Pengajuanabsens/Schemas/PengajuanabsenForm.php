<?php

namespace App\Filament\Resources\Pengajuanabsens\Schemas;

use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;

use function Symfony\Component\Clock\now;

class PengajuanabsenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Jenis Pengajuan')
                    ->schema([
                    Select::make('jns') // Nama field di tabel absensi
                        ->hiddenLabel() // <--- Ini akan menghilangkan label field
                        // ->extraInputAttributes(['class' => 'font-bold'])
                        ->placeholder('Pilih Jenis Pengajuan...') // Gunakan placeholder sebagai pengganti identitas
                        ->relationship('jenisabsen', 'ket') // 'jenisCuti' adalah nama relasi di Model, 'ket' adalah kolom yang ditampilkan
                        ->searchable()->preload()->required()->live()
                        ->columnSpanFull(), 
                        TextInput::make('nik')
                            ->label('NIK')->hidden()
                            ->default(fn () => Auth::user()?->nik ?? '') // Ambil NIK dari user login (null-safe)
                            ->readOnly()->required(),
                        TextInput::make('identitas_karyawan')
                            ->label('Karyawan')->columnSpan(3)
                            ->default(function () {
                                $user = Auth::user();
                                $nik = $user->nik;
                                $nama = $user->mkar?->ket;
                                return "{$nik}-{$nama}";
                            })
                            ->readOnly()->dehydrated(false), // Agar tidak mencoba menyimpan ke tabel absensi
                        TextInput::make('departemen_display')
                            ->label('Departemen')->columnSpan(2)
                            ->default(fn () => Auth::user()?->mkar->mdept?->ket ?? '')
                            ->readOnly()->dehydrated(false),
                        // Simpan kode departemen ke field kddep di tabel absensi (jika diperlukan)
                        TextInput::make('kddep')
                            ->hidden()
                            ->default(fn () => Auth::user()?->mkar?->kddep ?? ''),
                        TextInput::make('namaatasan')
                            ->label('Atasan Langsung')
                            ->default(fn () =>Auth::user()?->mkar?->atasan?->ket ?? '')
                            ->columnSpan(3)->readOnly()->required(),
                        TextInput::make('nm_atasan')
                            ->hidden()->default(fn () =>Auth::user()?->mkar?->nik_atasan ?? '')
                            ->readOnly()->required(),
                        TextInput::make('hak')
                            ->label('Hak Cuti (Hari)')
                            ->required()->numeric()->readOnly()->columnSpan(2)->default(0.0),
                        TextInput::make('ambil')
                            ->label('Diambil (Hari)')
                            ->required()->numeric()->readOnly()->columnSpan(2)->default(0.0),
                    ])->columns(12)
                    ->columnSpanFull(),

                Fieldset::make('Detail Pengajuan')
                    // ->description('Input data dasar di sini')
                    ->schema([
                        TextInput::make('lama')
                            ->label('Lama (Hari)')->required()->numeric()->default(1.0),
                        DatePicker::make('tawal')
                            ->label('Tanggal Awal')->default(now()->format('d-m-Y'))->native(false)->required(),
                        DatePicker::make('takhir')
                            ->label('Tanggal Akhir')->default(now()->format('d-m-Y'))
                            ->native(false)->afterOrEqual('tawal') // Validasi: tidak boleh sebelum tawal
                                ->validationMessages([
                                    'after_or_equal' => 'Tanggal akhir tidak boleh lebih awal daripada tanggal awal.',
                                ])                            
                            ->required(),
                        TextArea::make('alasan')
                            ->columnSpan(4)->required(),
                        TextArea::make('alamat')
                            ->label('Alamat')->columnSpan(4)
                            ->required(),
                        // TextInput::make('kota')
                        //     ->label('Kota')
                        //     ->required()
                        //     ->numeric()
                        //     ->default(0),
                    ])->columns(6)
                      ->columnSpanFull()    
            ]);
    }
}
