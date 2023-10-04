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
    public function scopeCurrentPage($query)
    {
        return $query->getQuery()->offset(($this->currentPage - 1) * $this->perPage)->limit($this->perPage);
    }
    public function url($page)
    {
        return route('pemain', ['pemain' => $this->id, 'page' => $page]);
    }
}
