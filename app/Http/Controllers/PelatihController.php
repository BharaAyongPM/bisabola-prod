<?php

// app/Http/Controllers/PelatihController.php

namespace App\Http\Controllers;

use App\Imports\PelatihImport;
use App\Models\Club;
use Illuminate\Http\Request;
use App\Models\Pelatih;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PelatihController extends Controller
{
    public function index(Request $request)
    {
        $selectedClubId = $request->input('club_id');
        $user = Auth::user();
        $club = Club::all();
        // $query = Pelatih::query();
        // if ($selectedClubId) {
        //     $query->where('club_id', $selectedClubId);
        // }
        $pelatih = Pelatih::with('club')->get(); // Mengambil data pelatih beserta klub yang terkait

        return view('pelatih.index', compact('pelatih', 'club', 'user'));
    }

    public function tambah()
    {
        // Menampilkan formulir untuk menambahkan pelatih baru
        $user = Auth::user();
        $clubs = Club::all();
        return view('pelatih.create', compact('clubs', 'user'));
    }

    public function store(Request $request)
    {
        // Validasi input dari formulir
        $validatedData = $request->validate([
            'kode_pelatih' => 'required|unique:pelatih',
            'nama' => 'required',
            'alamat' => '',
            'tanggal_lahir' => 'date',
            'lisensi' => '',
            'club_id' => 'exists:clubs,id', // Memastikan club_id ada di tabel clubs
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi unggah foto
        ]);
        if ($request->hasFile('foto')) {
            // Simpan foto ke dalam direktori storage/app/public/foto_club
            $path = $request->file('foto')->store('public/foto_pemain');

            // Ambil nama file dari path dan simpan ke dalam database
            $validatedData['foto'] = basename($path);
        }

        // Menyimpan data pelatih baru ke database
        Pelatih::create($validatedData);

        return redirect()->route('pelatih.index')
            ->with('success', 'Pelatih berhasil ditambahkan.');
    }
    public function inputexel()
    {
        $user = Auth::user();
        $pelatih = Pelatih::all();
        $clubs = Club::all();
        return view('pelatih.import', compact('pelatih', 'clubs', 'user'));
    }

    public function importa(Request $request)
    {
        $file = $request->file('file');

        // Validasi file Excel
        $this->validate($request, [
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Proses import data dari Excel menggunakan import class
        Excel::import(new PelatihImport, $file);

        // Setelah selesai impor, Anda dapat mengarahkan pengguna ke halaman yang sesuai
        return redirect()->route('pelatih.index')->with('success', 'Data Pelatih berhasil diimpor.');
    }
    // Metode lain seperti edit, update, destroy, dan lain-lain...
}
