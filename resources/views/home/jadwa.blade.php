@extends('home.layouts.lpemain')

@section('content')
<h1>Daftar Jadwal Pertandingan</h1>



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

        </tr>
    </thead>
    <tbody>
        @forelse ($matches as $match)
            <tr>
                <td>{{ $match->id }}</td>
                <td>{{ $match->Leagues->nama_liga }}</td>
                <td>{{ $match->homeclub->nama_club }}</td>
                <td>{{ $match->awayclub->nama_club }}</td>
                <td>{{ $match->hari }}</td>
                <td>{{ $match->tanggal }}</td>
                <td>{{ $match->jam }}</td>
                <td>{{ $match->tempat }}</td>

            </tr>
        @empty
            <tr>
                <td colspan="9">Tidak ada jadwal pertandingan.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
