@extends('layouts.app')

@section('content')
    <h1>Edit Pelatih</h1>

    <form action="{{ route('pelatih.update', $pelatih->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_pelatih">Kode Pelatih</label>
            <input type="text" class="form-control" id="kode_pelatih" name="kode_pelatih" value="{{ $pelatih->kode_pelatih }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pelatih->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pelatih->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pelatih->tanggal_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="lisensi">Lisensi</label>
            <input type="text" class="form-control" id="lisensi" name="lisensi" value="{{ $pelatih->lisensi }}" required>
        </div>
        <div class="form-group">
            <label for="club_id">Klub</label>
            <select class="form-control" id="club_id" name="club_id" required>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}" @if ($club->id === $pelatih->club_id) selected @endif>{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
