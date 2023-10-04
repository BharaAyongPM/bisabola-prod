<!-- resources/views/players/create.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Pemain</h1>
    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="club_id">Klub:</label>
            <select class="form-control" id="club_id" name="club_id" required>
                <option value="" selected disabled>Pilih Klub</option>
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="posisi">Posisi:</label>
            <input type="text" class="form-control" id="posisi" name="posisi" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="tinggi">Tinggi (cm):</label>
            <input type="number" class="form-control" id="tinggi" name="tinggi" required>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg):</label>
            <input type="number" class="form-control" id="berat" name="berat" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="kota">Kota:</label>
            <input type="text" class="form-control" id="kota" name="kota" required>
        </div>
        <div class="form-group">
            <label for="propinsi">Propinsi:</label>
            <input type="text" class="form-control" id="propinsi" name="propinsi" required>
        </div>
        <div class="form-group">
            <label for="no_whatsapp">Nomor WhatsApp:</label>
            <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <select class="form-control" id="agama" name="agama" required>
                <option value="" selected disabled>Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
