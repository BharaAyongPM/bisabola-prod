@extends('admin.layouts.app')

@section('content')
<h1>Daftar Jadwal Pertandingan</h1>

<a href="{{ route('matches.create') }}" class="btn btn-primary mb-3">Tambah Jadwal Pertandingan</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Liga</th>
            <th>Tuan Rumah</th>
            <th>Tamu</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Tempat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($matches as $match)
            <tr>
                <td>{{ $match->id }}</td>
                <td>{{ $match->Leagues->nama_liga }}</td>
                <td>{{ $match->tuanRumah->nama_club }}</td>
                <td>{{ $match->tamu->nama_club }}</td>
                <td>{{ $match->hari }}</td>
                <td>{{ $match->tanggal }}</td>
                <td>{{ $match->jam }}</td>
                <td>{{ $match->tempat }}</td>
                <td>
                    <a href="{{ route('matches.show', ['match' => $match->id]) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('matches.edit', ['match' => $match->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('matches.destroy', ['match' => $match->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal pertandingan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">Tidak ada jadwal pertandingan.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
