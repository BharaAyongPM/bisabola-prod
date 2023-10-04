<!-- resources/views/leagues/create.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Liga Baru</h1>

    <form action="{{ route('leagues.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_liga">Nama Liga:</label>
            <input type="text" name="nama_liga" id="nama_liga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_club">Jumlah Club:</label>
            <input type="number" name="jumlah_club" id="jumlah_club" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <input type="number" name="tahun" id="tahun" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="penyelenggara">Penyelenggara:</label>
            <input type="text" name="penyelenggara" id="penyelenggara" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="poster">Poster:</label>
            <input type="file" name="poster" id="poster" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Liga</button>
    </form>
@endsection
