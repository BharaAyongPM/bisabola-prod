<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_liga', 'id_club_tuan_rumah', 'id_club_tamu', 'hari', 'tanggal', 'jam', 'tempat',
    ];
}
