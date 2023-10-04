<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Club;
use App\Models\League;
use App\Models\LeagueParticipant;
use App\Models\Player;
use App\Models\Matches;
use App\Models\Pelatih;
use App\Models\PlayerStatistic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $totalPlayers = Player::count();
        $totalclub = Club::count();
        $players = Player::all();
        $totalliga = League::count();
        $totalpelatih = Pelatih::count();
        $clubs = Club::all();
        $pelatih = Pelatih::all();
        return view('home.beranda', compact('totalPlayers', 'totalclub', 'totalliga', 'clubs', 'totalpelatih'));
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
        $selectedPlayerId = $request->input('player_id'); // Mengambil parameter player_id
        $search = $request->input('search');
        $birthYear = $request->input('birth_year'); // Menambahkan input tahun kelahiran

        $clubs = Club::all();
        $query = Player::query();

        if ($selectedClubId) {
            $query->where('club_id', $selectedClubId);
        }

        // Jika player_id ada, tambahkan filter pemain berdasarkan player_id
        if ($selectedPlayerId) {
            $query->where('id', $selectedPlayerId);
        }
        if ($search) {
            $query->where('nama', 'LIKE', '%' . $search . '%');
        }
        // Jika tahun kelahiran ada, tambahkan filter pemain berdasarkan tahun kelahiran
        if ($birthYear) {
            $query->whereYear('tanggal_lahir', $birthYear);
        }

        $players = $query->paginate(10); // Ubah jumlah pemain per halaman sesuai kebutuhan

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
        $statistik = PlayerStatistic::where('pemain_id', $player->id)->get();

        $player->tanggal_lahir = Carbon::createFromFormat('Y-m-d', $player->tanggal_lahir);
        $tahun_lahir = $player->tanggal_lahir->format('Y');
        return view('home.lihatpemain', compact('player', 'statistik'));
    }
    public function tentang()
    {


        return view('home.tentang');
    }
    public function kontak()
    {


        return view('home.kontak');
    }
    public function jadwal()
    {

        $matches = Matches::all();
        $matches = Matches::with(['leagues', 'homeClub', 'awayClub'])->get();
        return view('home.jadwa', compact('matches'));
    }
    public function slihatjadwal($id)
    {

        $match = Matches::findOrFail($id);

        return view('home.lihatjadwal', compact('match'));
    }
    public function lihatliga($id)
    { {

            $league = League::findOrFail($id);
            $participants = LeagueParticipant::where('id_liga', $id)->pluck('id_club')->toArray();
            $clubs = Club::whereIn('id', $participants)->get();

            return view('home.pertandingan', compact('league', 'clubs'));
        }
    }
    public function pertandingan()
    {


        return view('home.pertandingan');
    }
    public function pertandingandetail()
    {


        return view('home.detail_pertandingan');
    }
    public function coach(Request $request)
    {
        $selectedClubId = $request->input('club_id');
        $user = Auth::user();
        $club = Club::all();
        // $query = Pelatih::query();
        // if ($selectedClubId) {
        //     $query->where('club_id', $selectedClubId);
        // }
        $pelatih = Pelatih::with('club')->get(); // Mengambil data pelatih beserta klub yang terkait

        return view('home.pelatih', compact('pelatih', 'club', 'user'));
    }
}
