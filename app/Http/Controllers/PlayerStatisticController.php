<?php

namespace App\Http\Controllers;

use App\Models\PlayerStatistic;
use App\Models\Player;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerStatisticController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $statistics = PlayerStatistic::all();
        return view('playerstatistics.index', compact('statistics', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        $players = Player::all();
        $clubs = Club::all();
        return view('playerstatistics.create', compact('players', 'clubs', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'musim' => 'required',
            'kompetisi' => 'required',
            'pemain_id' => 'required',
            // 'klub_id' => 'required',
            'gol' => 'required|integer',
            'asist' => 'required|integer',
            'kartu_kuning' => 'required|integer',
            'kuning_kuning' => 'required|integer',
            'kartu_merah' => 'required|integer',
            'tahun' => 'required|integer',
        ]);

        PlayerStatistic::create($request->all());

        return redirect()->route('playerstatistics.index')
            ->with('success', 'Statistik pemain berhasil ditambahkan.');
    }

    public function edit(PlayerStatistic $playerStatistic)
    {
        $user = Auth::user();
        $players = Player::all();
        $clubs = Club::all();
        return view('playerstatistics.edit', compact('playerStatistic', 'players', 'clubs', 'user'));
    }

    public function update(Request $request, PlayerStatistic $playerStatistic)
    {
        $request->validate([
            'musim' => 'required',
            'kompetisi' => 'required',
            'pemain_id' => 'required',
            'klub_id' => 'required',
            'gol' => 'required|integer',
            'asist' => 'required|integer',
            'kartu_kuning' => 'required|integer',
            'kuning_kuning' => 'required|integer',
            'kartu_merah' => 'required|integer',
            'tahun' => 'required|integer',
        ]);

        $playerStatistic->update($request->all());

        return redirect()->route('playerstatistics.index')
            ->with('success', 'Statistik pemain berhasil diperbarui.');
    }

    public function destroy(PlayerStatistic $playerStatistic)
    {
        $user = Auth::user();
        $playerStatistic->delete();

        return redirect()->route('playerstatistics.index')
            ->with('success', 'Statistik pemain berhasil dihapus.');
    }
}
