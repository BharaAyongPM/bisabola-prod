@extends('admin.layouts.app')

@section('content')
    <h1>Daftar Pemain</h1>
    <a href="/player/tambah" class="btn btn-primary">Tambah Pemain</a>
    <a href="/player/input" class="btn btn-primary">Tambah Pemain Via Exel</a>
     <!-- Filter Club -->
     <div class="form-group">
        <label for="filter_club">Filter Klub:</label>
        <form action="{{ route('players.index') }}" method="GET" class="form-inline">
            <select class="form-control" name="club_id" id="filter_club">
                <option value="">Semua Klub</option>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Pemain</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Klub</th>
                <th>Aksi</th>
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
                        <a href="{{ route('players.show', $player->id) }}" class="btn btn-primary">Lihat</a>
                        <a href="{{ route('players.edit', $player->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus pemain ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

