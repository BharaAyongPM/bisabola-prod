<!-- resources/views/leagues/index.blade.php -->

@extends('home.layouts.app')

@section('content')
    <h1>Daftar Liga</h1>


    <table class="table">
        <thead>
            <tr>
                <th>Nama Liga</th>
                <th>Jumlah Club</th>
                <th>Tahun</th>
                <th>Penyelenggara</th>
                <th>Poster</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($leagues as $league)
                <tr>
                    <td>{{ $league->nama_liga }}</td>
                    <td>{{ $league->jumlah_club }}</td>
                    <td>{{ $league->tahun }}</td>
                    <td>{{ $league->penyelenggara }}</td>
                    <td>
                        @if ($league->poster)
                            <img src="{{ asset('storage/poster/' . $league->poster) }}" alt="Poster Liga" class="img-thumbnail" width="100">
                        @else
                            Tidak ada poster
                        @endif
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="6">Tidak ada data liga.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
