<?php

namespace App\Imports;

use App\Models\Pelatih;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PelatihImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Sesuaikan dengan kolom-kolom dalam file Excel
        return new Pelatih([
            'kode_pelatih' => $row['kode_pelatih'],
            'nama' => $row['nama'],
            'alamat' => $row['alamat'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'lisensi' => $row['lisensi'],
            'club_id' => $row['club_id'],
            'foto' => $row['foto'],
        ]);
    }
}
