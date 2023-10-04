@extends('home.layouts.lpemain')

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
        <p >Kode Pemain: {{ $player->player_code }}</p>
        <p >Posisi: {{ $player->posisi }}</p>
        <p >Tempat Lahir: {{ $player->tempat_lahir }}</p>
        <p >Tanggal Lahir: {{ $player->tanggal_lahir }}</p>
        <p >Tinggi: {{ $player->tinggi }} cm</p>
        <p >Berat: {{ $player->berat }} kg</p>
        <p >Alamat: {{ $player->alamat }}</p>
        <p >Kota: {{ $player->kota }}</p>
        <p >Propinsi: {{ $player->propinsi }}</p>
        <p >Nomor WhatsApp: {{ $player->no_whatsapp }}</p>
        <p >Agama: {{ $player->agama }}</p>

    </div>
</div>
@endsection
