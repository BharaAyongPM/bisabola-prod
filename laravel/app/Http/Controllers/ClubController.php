<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $clubs = Club::all();
        return view('club.index', compact('clubs', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('club.create', compact('user'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'nama_club' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'pelatih' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:10048', // Validasi unggah foto
        ]);

        // Cek apakah ada foto yang diunggah
        if ($request->hasFile('foto')) {
            // Simpan foto ke dalam direktori storage/app/public/foto_club
            $path = $request->file('foto')->store('public/foto_club');

            // Ambil nama file dari path dan simpan ke dalam database
            $validatedData['foto'] = basename($path);
        }

        Club::create($validatedData);

        return redirect()->route('clubs.index')->with('success', 'Klub berhasil ditambahkan!');
    }

    public function show($id)
    {
        $user = Auth::user();
        $club = Club::with('players')->findOrFail($id);
        return view('club.show', compact('club', 'user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $club = Club::findOrFail($id);
        return view('club.edit', compact('club', 'user'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $club = Club::findOrFail($id);

        $data = $request->validate([
            'nama_club' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'pelatih' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi unggah foto
        ]);

        // Cek apakah ada foto yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($club->foto) {
                Storage::delete('public/foto_club/' . $club->foto);
            }

            // Simpan foto baru ke dalam direktori storage/app/public/foto_club
            $path = $request->file('foto')->store('public/foto_club');

            // Ambil nama file dari path dan simpan ke dalam database
            $data['foto'] = basename($path);
        }

        $club->update($data);

        return redirect()->route('clubs.index')->with('success', 'Klub berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $club = Club::findOrFail($id);

        // Hapus foto klub dari storage jika ada
        if ($club->foto) {
            Storage::delete('public/foto_club/' . $club->foto);
        }

        $club->delete();

        return redirect()->route('clubs.index')->with('success', 'Klub berhasil dihapus!');
    }
}
