<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = 'pelatih'; // Menentukan nama tabel yang sesuai

    protected $fillable = [
        'kode_pelatih',
        'nama',
        'alamat',
        'tanggal_lahir',
        'lisensi',
        'club_id', // Menyertakan club_id sebagai field yang bisa diisi
        'foto',
    ];

    protected $dates = ['tanggal_lahir']; // Menentukan bahwa tanggal_lahir adalah kolom tanggal

    // Definisikan relasi antara Pelatih dan Club
    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }
}
