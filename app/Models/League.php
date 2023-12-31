<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_liga', 'des', 'jumlah_club', 'tahun', 'penyelenggara', 'poster',
    ];
}
