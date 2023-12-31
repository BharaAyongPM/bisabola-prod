@extends('home.layouts.app')

@section('content')
<h1>Detail Jadwal Pertandingan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $match->id }}</h5>
            <p class="card-text">Liga: {{ $match->Leagues->nama_liga  }}</p>
            <p class="card-text">Tuan Rumah: {{ $match->homeclub->nama_club }}</p>
            <p class="card-text">Tamu: {{ $match->awayclub->nama_club }}</p>
            <p class="card-text">Hari: {{ $match->hari }}</p>
            <p class="card-text">Tanggal: {{ $match->tanggal }}</p>
            <p class="card-text">Jam: {{ $match->jam }}</p>
            <p class="card-text">Tempat: {{ $match->tempat }}</p>
        </div>
    </div>
@endsection
