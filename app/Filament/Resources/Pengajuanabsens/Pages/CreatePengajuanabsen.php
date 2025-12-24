<?php

namespace App\Filament\Resources\Pengajuanabsens\Pages;

use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Pengajuanabsens\PengajuanabsenResource;

class CreatePengajuanabsen extends CreateRecord
{
    protected static string $resource = PengajuanabsenResource::class;

// app/Filament/Resources/AbsensiResource/Pages/CreateAbsensi.php

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $karyawan = Auth::user()->mkar;
        
        $data['nik'] = $karyawan->nik;
        $data['nm_atasan'] = $karyawan->nik_atasan; // Mengambil nama atasan otomatis
        $data['kddep'] = $karyawan->kddep;

        return $data;
    }
}
