<!-- resources/views/leagues/show.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Informasi Liga</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $league->nama_liga }}</h5>
            <p class="card-text">Jumlah Club: {{ $league->jumlah_club }}</p>
            <p class="card-text">Tahun: {{ $league->tahun }}</p>
            <p class="card-text">Penyelenggara: {{ $league->penyelenggara }}</p>
            @if ($league->poster)
                <img src="{{ asset('storage/poster/' . $league->poster) }}" alt="Poster Liga" class="img-thumbnail" width="200">
            @else
                <p class="card-text">Tidak ada poster</p>
            @endif
        </div>
    </div>

    <h2>Daftar Club yang Berpartisipasi</h2>
    <ul>
        @forelse ($clubs as $club)
            <li>{{ $club->nama_club }}</li>
        @empty
            <li>Tidak ada club yang berpartisipasi.</li>
        @endforelse
    </ul>
@endsection
