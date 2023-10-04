<!-- resources/views/leagues/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Daftar Liga</h1>

    <a href="{{ route('leagues.create') }}" class="btn btn-primary mb-3">Tambah Liga Baru</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Liga</th>
                <th>Jumlah Club</th>
                <th>Tahun</th>
                <th>Penyelenggara</th>
                <th>Poster</th>
                <th>Aksi</th>
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
                    <td>
                        <a href="{{ route('leagues.show', $league->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('leagues.edit',  $league->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('leagues.destroy', $league->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus liga ini?')">Hapus</button>
                        </form>
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
