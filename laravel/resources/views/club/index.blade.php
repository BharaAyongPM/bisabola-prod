<!-- resources/views/club/index.blade.php -->
@extends('admin.layouts.app')

@section('content')
    <h1>Daftar Klub</h1>
    <a href="{{ route('clubs.create') }}" class="btn btn-primary mb-3">Tambah Klub Baru</a>
    <div class="row">
        @foreach($clubs as $club)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($club->foto)
                        <img src="{{ asset('storage/foto_club/' . $club->foto) }}" class="img" alt="Foto Klub"width="100" height="100">
                    @else
                        <img src="{{ asset('images/default-club.jpg') }}" class="img" alt="Default Foto Klub">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $club->nama_club }}</h5>
                        <p class="card-text">{{ $club->alamat }}</p>
                        <a href="{{ route('clubs.show', $club->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
