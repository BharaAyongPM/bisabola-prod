<?php

namespace App\Http\Controllers;

use App\Imports\PlayersImport;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Club;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selectedClubId = $request->input('club_id');
        $user = Auth::user();
        $clubs = Club::all();
        $query = Player::query();
        if ($selectedClubId) {
            $query->where('club_id', $selectedClubId);
        }
        // $players = Player::with('club')->get();
        $players = $query->get();
        return view('players.index', compact('players', 'user', 'clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $user = Auth::user();
        $clubs = Club::all();
        return view('players.create', compact('clubs', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'club_id' => 'required',
            'nama' => 'required',
            'posisi' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tinggi' => 'required|numeric',
            'berat' => 'required|numeric',
            'alamat' => 'required',
            'kota' => 'required',
            'propinsi' => 'required',
            'no_whatsapp' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi unggah foto
            'agama' => 'required',
        ]);

        // Cek apakah ada foto yang diunggah
        if ($request->hasFile('foto')) {
            // Simpan foto ke dalam direktori storage/app/public/foto_club
            $path = $request->file('foto')->store('public/foto_pemain');

            // Ambil nama file dari path dan simpan ke dalam database
            $validatedData['foto'] = basename($path);
        }
        // Generate player_code: BB-tgllahir-randomangka
        $tglLahir = str_replace('-', '', $request->tanggal_lahir);
        $playerCode = 'BB-' . $tglLahir . '-' . Str::random(4);

        $validatedData['player_code'] = $playerCode;

        Player::create($validatedData);

        return redirect()->route('players.index')->with('success', 'Pemain berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $player = Player::findOrFail($id);
        return view('players.show', compact('player', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $player = Player::findOrFail($id);
        $clubs = Club::all();
        return view('players.edit', compact('player', 'clubs', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'club_id' => 'required',
            'nama' => 'required',
            'posisi' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tinggi' => 'required|numeric',
            'berat' => 'required|numeric',
            'alamat' => 'required',
            'kota' => 'required',
            'propinsi' => 'required',
            'no_whatsapp' => 'required',
            // 'foto' => 'required',
            'agama' => 'required',
        ]);

        $player = Player::findOrFail($id);
        $player->update($validatedData);

        return redirect()->route('players.index')->with('success', 'Data pemain berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect()->route('players.index')->with('success', 'Data pemain berhasil dihapus.');
    }
    public function inputexel()
    {
        $user = Auth::user();
        $player = Player::all();
        $clubs = Club::all();
        return view('players.import', compact('player', 'clubs', 'user'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new PlayersImport, $request->file('file'));

        return redirect()->route('players.index')->with('success', 'Data pemain berhasil diimpor!');
    }
}
