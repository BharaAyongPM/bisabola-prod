@extends('home.layouts.app')

@section('content')

<h1>Daftar Pemain</h1>

     <div class="form-group">
        <label for="filter_club">Filter Klub:</label>
        <form action="{{ route('pemain') }}" method="GET" class="form-inline">
            <select class="form-control" name="club_id" id="filter_club">
                <option value="">Semua Klub</option>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>
    <table class="table">lihatpemain
        <thead>
            <tr>
                <th>Kode Pemain</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Klub</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->player_code }}</td>
                    <td>{{ $player->nama }}</td>
                    <td>{{ $player->posisi }}</td>
                    <td>{{ $player->club->nama_club }}</td>
                    <td>
                        <a href="{{ route('lihatpemain', $player->id) }}" class="btn btn-primary">Lihat</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
