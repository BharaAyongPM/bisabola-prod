@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Statistik Pemain</h1>

    <form action="{{ route('playerstatistics.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="musim">Musim:</label>
            <input type="text" name="musim" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kompetisi">Kompetisi:</label>
            <input type="text" name="kompetisi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pemain_id">Pemain:</label>
            <select name="pemain_id" class="form-control" required>
                @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->nama }}</option>
                @endforeach
            </select>
             <!-- Tambahkan input tersembunyi untuk club_id -->
    {{-- <input type="hidden" name="club_id" id="club_id"> --}}
        </div>
        {{-- <div class="form-group">
            <label for="klub_id">Klub:</label>
            <select name="klub_id" class="form-control" required>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="form-group">
            <label for="gol">Gol:</label>
            <input type="number" name="gol" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="asist">Asist:</label>
            <input type="number" name="asist" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kartu_kuning">Kartu Kuning:</label>
            <input type="number" name="kartu_kuning" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kartu_kuning">Kartu Kuning Doble:</label>
            <input type="number" name="kuning_kuning" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kartu_merah">Kartu Merah:</label>
            <input type="number" name="kartu_merah" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun:</label>
            <input type="number" name="tahun" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    {{-- <script>
        $(document).ready(function () {
            $('select[name="pemain_id"]').change(function () {
                var playerId = $(this).val();
                // Lakukan permintaan AJAX untuk mengambil club_id dari pemain yang dipilih
                $.ajax({
                    type: "GET",
                    url: "/get-club/" + playerId, // Ganti dengan URL yang sesuai
                    success: function (data) {
                        $('#club_id').val(data.club_id);
                    }
                });
            });
        });
    </script> --}}
@endsection
