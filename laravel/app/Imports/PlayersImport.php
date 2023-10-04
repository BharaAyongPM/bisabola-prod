<?php
// app/Imports/PlayersImport.php

namespace App\Imports;

use App\Models\Player;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class PlayersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Player([
            // Sesuaikan dengan field yang ada di tabel players
            'player_code' => $row['player_code'],
            'club_id' => $row['club_id'],
            'no' => $row['no'],
            'nama' => $row['nama'],
            'posisi' => $row['posisi'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'tinggi' => $row['tinggi'],
            'berat' => $row['berat'],
            'alamat' => $row['alamat'],
            'kota' => $row['kota'],
            'propinsi' => $row['propinsi'],
            'no_whatsapp' => $row['no_whatsapp'],
            'foto' => $row['foto'],
            'agama' => $row['agama'],
        ]);
    }
}
