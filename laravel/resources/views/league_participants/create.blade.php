<!-- resources/views/league_participants/create.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Input Peserta Liga</h1>

    <form action="{{ route('league_participants.store') }}" method="POST">
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
            <label for="id_club">Pilih Club:</label>
            <select name="id_club" id="id_club" class="form-control">
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan ke Liga</button>
    </form>

    <!-- Tampilkan daftar peserta liga disini jika diperlukan -->
@endsection
