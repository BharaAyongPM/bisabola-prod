<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_club',
        'deskripsi',
        'alamat',
        'manager',
        'pelatih',
        'no_telp',
        'email',
        'foto',
    ];
    public function players()
    {
        return $this->hasMany(Player::class, 'club_id');
    }
}
