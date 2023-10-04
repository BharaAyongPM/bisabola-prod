<!-- resources/views/players/show.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Detail Pemain</h1>
    <div class="card">
        @if($player->foto)
        <img src="{{ asset('storage/foto_pemain/' . $player->foto) }}" class="img" alt="Foto pemain"width="100" height="100">
    @else
        <img src="{{ asset('images/default-club.jpg') }}" class="img" alt="Default Foto pemain">
    @endif
        <div class="card-body">
            <h5 class="card-title">{{ $player->nama }}</h5>
            <p class="card-text">Kode Pemain: {{ $player->player_code }}</p>
            <p class="card-text">Posisi: {{ $player->posisi }}</p>
            <p class="card-text">Tempat Lahir: {{ $player->tempat_lahir }}</p>
            <p class="card-text">Tanggal Lahir: {{ $player->tanggal_lahir }}</p>
            <p class="card-text">Tinggi: {{ $player->tinggi }} cm</p>
            <p class="card-text">Berat: {{ $player->berat }} kg</p>
            <p class="card-text">Alamat: {{ $player->alamat }}</p>
            <p class="card-text">Kota: {{ $player->kota }}</p>
            <p class="card-text">Propinsi: {{ $player->propinsi }}</p>
            <p class="card-text">Nomor WhatsApp: {{ $player->no_whatsapp }}</p>
            <p class="card-text">Agama: {{ $player->agama }}</p>

        </div>
    </div>
@endsection
