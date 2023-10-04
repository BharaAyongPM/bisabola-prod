
@extends('admin.layouts.app')

@section('content')
    <h1>Detail Klub</h1>

    <div class="card">
        @if($club->foto)
        <img src="{{ asset('storage/foto_club/' . $club->foto) }}" class="img" alt="Foto Klub" width="100" height="100">
    @else
        <img src="{{ asset('images/default-club.jpg') }}" class="img" alt="Default Foto Klub">
    @endif
        <div class="card-body">
            <h5 class="card-title">{{ $club->nama_club }}</h5>
            <p class="card-text">Alamat: {{ $club->alamat }}</p>
            <p class="card-text">Manager: {{ $club->manager }}</p>
            <p class="card-text">Pelatih: {{ $club->pelatih }}</p>
            <p class="card-text">No. Telepon: {{ $club->no_telp }}</p>
            <p class="card-text">Email: {{ $club->email }}</p>
            <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus klub ini?')">Hapus</button>
            </form>
        </div>
    </div>
    <h2>Daftar Pemain</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Pemain</th>
                <th>Nama Pemain</th>
                <th>Posisi</th>
                <th>Tanggal Lahir</th>
                <th>Tinggi (cm)</th>
                <th>Berat (kg)</th>
                <th>No. WhatsApp</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($club->players as $player)
                <tr>
                    <td>{{ $player->player_code }}</td>
                    <td>{{ $player->nama }}</td>
                    <td>{{ $player->posisi }}</td>
                    <td>{{ $player->tanggal_lahir }}</td>
                    <td>{{ $player->tinggi }}</td>
                    <td>{{ $player->berat }}</td>
                    <td>{{ $player->no_whatsapp }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada pemain terdaftar untuk klub ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
