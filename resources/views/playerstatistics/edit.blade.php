@extends('admin.layouts.app')

@section('content')
    <h1>Edit Statistik Pemain</h1>

    <form method="POST" action="{{ route('playerstatistics.update', $playerStatistic->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="musim">Musim:</label>
            <input type="text" name="musim" class="form-control" value="{{ $playerStatistic->musim }}" required>
        </div>
        <div class="form-group">
            <label for="kompetisi">Kompetisi:</label>
            <input type="text" name="kompetisi" class="form-control" value="{{ $playerStatistic->kompetisi }}" required>
        </div>
        <div class="form-group">
            <label for="pemain_id">Pemain:</label>
            <select name="pemain_id" class="form-control" required>
                @foreach ($players as $player)
                    <option value="{{ $player->id }}" {{ $playerStatistic->pemain_id == $player->id ? 'selected' : '' }}>
                        {{ $player->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="klub_id">Klub:</label>
            <select name="klub_id" class="form-control" required>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}" {{ $playerStatistic->klub_id == $club->id ? 'selected' : '' }}>
                        {{ $club->nama_club }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gol">Gol:</label>
            <input type="number" name="gol" class="form-control" value="{{ $playerStatistic->gol }}" required>
        </div>
        <div class="form-group">
            <label for="asist">Asist:</label>
            <input type="number" name="asist" class="form-control" value="{{ $playerStatistic->asist }}" required>
        </div>
        <div class="form-group">
            <label for="kartu_kuning">Kartu Kuning:</label>
            <input type="number" name="kartu_kuning" class="form-control" value="{{ $playerStatistic->kartu_kuning }}" required>
        </div>
        <div class="form-group">
            <label for="kartu_merah">Kartu Merah:</label>
            <input type="number" name="kartu_merah" class="form-control" value="{{ $playerStatistic->kartu_merah }}" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <input type="number" name="tahun" class="form-control" value="{{ $playerStatistic->tahun }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
