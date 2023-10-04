<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\League;
use App\Models\LeagueParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeagueParticipantController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        $leagues = League::all();
        $clubs = Club::all();
        return view('league_participants.create', compact('leagues', 'clubs', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_liga' => 'required',
            'id_club' => 'required',
        ]);

        LeagueParticipant::create([
            'id_liga' => $request->id_liga,
            'id_club' => $request->id_club,
        ]);

        return redirect()->route('league_participants.create')->with('success', 'Club berhasil ditambahkan ke liga!');
    }
}
