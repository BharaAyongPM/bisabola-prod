<!-- resources/views/club/edit.blade.php -->

@extends('admin.layouts.app')
@section('content')
    <h1>Edit Klub</h1>
    <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_club">Nama Klub:</label>
            <input type="text" class="form-control" id="nama_club" name="nama_club" value="{{ $club->nama_club }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $club->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="manager">Manager:</label>
            <input type="text" class="form-control" id="manager" name="manager" value="{{ $club->manager }}" required>
        </div>
        <div class="form-group">
            <label for="pelatih">Pelatih:</label>
            <input type="text" class="form-control" id="pelatih" name="pelatih" value="{{ $club->pelatih }}" required>
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telepon:</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $club->no_telp }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $club->email }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto Klub:</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
