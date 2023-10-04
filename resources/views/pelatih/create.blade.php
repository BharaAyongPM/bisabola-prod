@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Pelatih</h1>

    <form action="{{ route('pelatih.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_pelatih">Kode Pelatih</label>
            <input type="text" class="form-control" id="kode_pelatih" name="kode_pelatih" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="lisensi">Lisensi</label>
            <input type="text" class="form-control" id="lisensi" name="lisensi" required>
        </div>
        <div class="form-group">
            <label for="club_id">Klub</label>
            <select class="form-control" id="club_id" name="club_id" required>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Pelatih</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
