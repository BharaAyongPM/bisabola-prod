<!-- resources/views/club/edit.blade.php -->

@extends('admin.layouts.app')
@section('content')
    <h1>Edit Klub</h1>
    <form action="{{ route('leagues.update', $liga->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_liga">Nama Liga:</label>
            <input type="text" class="form-control" id="nama_liga" name="nama_liga" value="{{ $liga->nama_liga }}" required>
        </div>
        <div class="form-group">
            <label for="des">Deskripsi:</label>
            <input type="text" class="form-control" id="des" name="des" value="{{ $liga->des }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_club">Jumlah Club:</label>
            <input type="int" class="form-control" id="jumlah_club" name="jumlah_club" value="{{ $liga->jumlah_club }}" required>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $liga->tahun }}" required>
        </div>
        <div class="form-group">
            <label for="penyelenggara">Penyelenggara:</label>
            <input type="penyelenggara" class="form-control" id="penyelenggara" name="penyelenggara" value="{{ $liga->penyelenggara }}" required>
        </div>
        <div class="form-group">
            <label for="poster">Poster/Logo:</label>
            <input type="file" class="form-control" id="poster" name="poster">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
