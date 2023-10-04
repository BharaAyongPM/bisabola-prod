<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\League;
use App\Models\Matches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $matches = Matches::all();
        return view('matches.index', compact('matches', 'user'));
    }

    public function create()
    {
        // Dapatkan daftar liga dan club untuk digunakan dalam form
        $user = Auth::user();
        $leagues = League::all();
        $clubs = Club::all();

        return view('matches.create', compact('leagues', 'clubs', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_liga' => 'required',
            'id_club_tuan_rumah' => 'required',
            'id_club_tamu' => 'required',
            'hari' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'tempat' => 'required',
        ]);

        Matches::create($request->all());

        return redirect()->route('matches.index')->with('success', 'Jadwal pertandingan berhasil ditambahkan!');
    }

    public function show($id)
    {
        $user = Auth::user();
        $match = Matches::findOrFail($id);

        return view('matches.show', compact('match', 'user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $match = Matches::findOrFail($id);
        $leagues = League::all();
        $clubs = Club::all();

        return view('matches.edit', compact('match', 'leagues', 'clubs', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_liga' => 'required',
            'id_club_tuan_rumah' => 'required',
            'id_club_tamu' => 'required',
            'hari' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'tempat' => 'required',
        ]);

        $match = Matches::findOrFail($id);
        $match->update($request->all());

        return redirect()->route('matches.index')->with('success', 'Jadwal pertandingan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $match = Matches::findOrFail($id);
        $match->delete();

        return redirect()->route('matches.index')->with('success', 'Jadwal pertandingan berhasil dihapus!');
    }
}
