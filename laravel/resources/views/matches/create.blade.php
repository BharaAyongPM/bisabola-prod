@extends('admin.layouts.app')

@section('content')
<h1>Tambah Jadwal Pertandingan</h1>

<form action="{{ route('matches.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="id_liga">Pilih Liga:</label>
        <select name="id_liga" id="id_liga" class="form-control">
            @foreach ($leagues as $league)
                <option value="{{ $league->id }}">{{ $league->nama_liga }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_club_tuan_rumah">Pilih Club Tuan Rumah:</label>
        <select name="id_club_tuan_rumah" id="id_club_tuan_rumah" class="form-control">
            @foreach ($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_club_tamu">Pilih Club Tamu:</label>
        <select name="id_club_tamu" id="id_club_tamu" class="form-control">
            @foreach ($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="hari">Hari:</label>
        <input type="text" name="hari" id="hari" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jam">Jam:</label>
        <input type="time" name="jam" id="jam" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tempat">Tempat Pertandingan:</label>
        <input type="text" name="tempat" id="tempat" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Jadwal Pertandingan</button>
</form>
@endsection
