@extends('admin.layouts.app')

@section('content')
<h1>Edit Jadwal Pertandingan</h1>

    <form action="{{ route('matches.update', ['match' => $match->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_liga">Pilih Liga:</label>
            <select name="id_liga" id="id_liga" class="form-control">
                @foreach ($leagues as $league)
                    <option value="{{ $league->id }}" {{ $league->id === $match->id_liga ? 'selected' : '' }}>{{ $league->nama_liga }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_club_tuan_rumah">Pilih Club Tuan Rumah:</label>
            <select name="id_club_tuan_rumah" id="id_club_tuan_rumah" class="form-control">
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}" {{ $club->id === $match->id_club_tuan_rumah ? 'selected' : '' }}>{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_club_tamu">Pilih Club Tamu:</label>
            <select name="id_club_tamu" id="id_club_tamu" class="form-control">
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}" {{ $club->id === $match->id_club_tamu ? 'selected' : '' }}>{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="hari">Hari:</label>
            <input type="text" name="hari" id="hari" class="form-control" value="{{ $match->hari }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $match->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="jam">Jam:</label>
            <input type="time" name="jam" id="jam" class="form-control" value="{{ $match->jam }}" required>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat Pertandingan:</label>
            <input type="text" name="tempat" id="tempat" class="form-control" value="{{ $match->tempat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
