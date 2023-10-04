<!-- resources/views/players/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Edit Pemain</h1>
    <form action="{{ route('players.updatee', $player->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="club_id">Klub:</label>
            <select class="form-control" id="club_id" name="club_id" required>
                <option value="" selected disabled>Pilih Klub</option>
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}" @if($club->id === $player->club_id) selected @endif>{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $player->nama }}" required>
        </div>
        <div class="form-group">
            <label for="posisi">Posisi:</label>
            <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $player->posisi }}" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $player->tempat_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $player->tanggal_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="tinggi">Tinggi (cm):</label>
            <input type="number" class="form-control" id="tinggi" name="tinggi" value="{{ $player->tinggi }}" required>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg):</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ $player->berat }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $player->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="kota">Kota:</label>
            <input type="text" class="form-control" id="kota" name="kota" value="{{ $player->kota }}" required>
        </div>
        <div class="form-group">
            <label for="propinsi">Propinsi:</label>
            <input type="text" class="form-control" id="propinsi" name="propinsi" value="{{ $player->propinsi }}" required>
        </div>
        <div class="form-group">
            <label for="no_whatsapp">Nomor WhatsApp:</label>
            <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" value="{{ $player->no_whatsapp }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            <p class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</p>
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <select class="form-control" id="agama" name="agama" required>
                <option value="" selected disabled>Pilih Agama</option>
                <option value="Islam" @if($player->agama === 'Islam') selected @endif>Islam</option>
                <option value="Kristen Protestan" @if($player->agama === 'Kristen Protestan') selected @endif>Kristen Protestan</option>
                <option value="Katolik" @if($player->agama === 'Katolik') selected @endif>Katolik</option>
                <option value="Hindu" @if($player->agama === 'Hindu') selected @endif>Hindu</option>
                <option value="Buddha" @if($player->agama === 'Buddha') selected @endif>Buddha</option>
                <option value="Konghucu" @if($player->agama === 'Konghucu') selected @endif>Konghucu</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
