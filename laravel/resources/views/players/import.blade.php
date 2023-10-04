@extends('admin.layouts.app')

@section('content')
    <h1>Impor Data Pemain dari Excel</h1>

    <form action="{{ route('players.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Pilih File Excel:</label>
            <input type="file" name="file" id="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Impor Data</button>
    </form>
@endsection
