<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Club;
use App\Models\League;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $totalPlayers = Player::count();
        $totalclub = Club::count();
        $players = Player::all();
        $totalliga = League::count();
        $clubs = Club::all();
        return view('home.beranda', compact('totalPlayers', 'totalclub', 'totalliga', 'clubs'));
    }
    public function liga()
    {

        $leagues = League::all();
        return view('home.liga', compact('leagues',));
    }
    public function club()
    {

        $clubs = Club::all();

        return view('home.club', compact('clubs',));
    }
    public function pemain(Request $request)
    {
        $selectedClubId = $request->input('club_id');

        $clubs = Club::all();
        $query = Player::query();
        if ($selectedClubId) {
            $query->where('club_id', $selectedClubId);
        }
        // $players = Player::with('club')->get();
        $players = $query->get();
        return view('home.pemain', compact('players', 'clubs'));
    }
    public function lihatclub($id)
    {

        $club = Club::with('players')->findOrFail($id);
        $playerCount = Player::where('club_id', $id)->count();
        return view('home.lihatclub', compact('club', 'playerCount'));
    }
    public function lihatpemain($id)
    {

        $player = Player::findOrFail($id);
        return view('home.lihatpemain', compact('player',));
    }
    public function tentang()
    {


        return view('home.tentang');
    }
    public function kontak()
    {


        return view('home.kontak');
    }
}
