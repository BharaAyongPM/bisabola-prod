<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_code',
        'club_id',
        'no',
        'nama',
        'posisi',
        'tempat_lahir',
        'tanggal_lahir',
        'tinggi',
        'berat',
        'alamat',
        'kota',
        'propinsi',
        'no_whatsapp',
        'foto',
        'agama',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
