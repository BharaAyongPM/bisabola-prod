<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerStatistic extends Model
{
    protected $fillable = [
        'musim',
        'kompetisi',
        'pemain_id',
        // 'klub_id',
        'gol',
        'asist',
        'kartu_kuning',
        'kuning_kuning',
        'kartu_merah',
        'tahun',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'pemain_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'klub_id');
    }
}
