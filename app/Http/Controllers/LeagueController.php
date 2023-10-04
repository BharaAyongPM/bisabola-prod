<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\League;
use App\Models\LeagueParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $leagues = League::all();
        return view('leagues.index', compact('leagues', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('leagues.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_liga' => 'required',
            'des' => 'required',
            'jumlah_club' => 'required|integer',
            'tahun' => 'required|integer',
            'penyelenggara' => 'required',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('public/poster');
            $data['poster'] = basename($path);
        }

        League::create($data);


        return redirect()->route('leagues.index')->with('success', 'Liga berhasil ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { {
            $user = Auth::user();
            $league = League::findOrFail($id);
            $participants = LeagueParticipant::where('id_liga', $id)->pluck('id_club')->toArray();
            $clubs = Club::whereIn('id', $participants)->get();

            return view('leagues.show', compact('league', 'clubs', 'user'));
        }
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
        $liga = League::findOrFail($id);
        return view('leagues.edit', compact('liga', 'user'));
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
        $user = Auth::user();
        $liga = League::findOrFail($id);

        $data = $request->validate([
            'nama_liga' => 'required|string|max:255',
            'des' => 'required|string|max:255',
            'jumlah_club' => 'required|string|max:255',
            'tahun' => 'required|string|max:255',
            'penyelenggara' => 'required|string|max:255',


        ]);

        // Cek apakah ada foto yang diunggah
        if ($request->hasFile('poster')) {
            // Hapus poster lama jika ada
            if ($liga->poster) {
                Storage::delete('public/poster/' . $liga->poster);
            }

            // Simpan poster baru ke dalam direktori storage/app/public/poster_club
            $path = $request->file('poster')->store('public/poster');

            // Ambil nama file dari path dan simpan ke dalam database
            $data['poster'] = basename($path);
        }

        $liga->update($data);

        return redirect()->route('leagues.index')->with('success', 'Liga berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
