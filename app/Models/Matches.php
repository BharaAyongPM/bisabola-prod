<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_liga', 'id_club_tuan_rumah', 'id_club_tamu', 'hari', 'tanggal', 'jam', 'tempat', 'skor_home', 'skor_away',
    ];
    public function leagues()
    {
        return $this->belongsTo(League::class, 'id_liga');
    }

    public function homeClub()
    {
        return $this->belongsTo(Club::class, 'id_club_tuan_rumah');
    }

    public function awayClub()
    {
        return $this->belongsTo(Club::class, 'id_club_tamu');
    }
}
