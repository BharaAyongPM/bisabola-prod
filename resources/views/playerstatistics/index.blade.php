@extends('admin.layouts.app')

@section('content')
    <h1>Data Statistik Pemain</h1>

    <a href="{{ route('playerstatistics.create') }}" class="btn btn-primary">Tambah Statistik Pemain</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Musim</th>
                <th>Kompetisi</th>
                <th>Pemain</th>
                {{-- <th>Klub</th> --}}
                <th>Gol</th>
                <th>Asist</th>
                <th>Kartu Kuning</th>
                <th>Kartu Merah</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($statistics as $statistic)
                <tr>
                    <td>{{ $statistic->id }}</td>
                    <td>{{ $statistic->musim }}</td>
                    <td>{{ $statistic->kompetisi }}</td>
                    <td>{{ $statistic->player->nama }}</td>
                    {{-- <td>{{ $statistic->club->nama_club }}</td> --}}
                    <td>{{ $statistic->gol }}</td>
                    <td>{{ $statistic->asist }}</td>
                    <td>{{ $statistic->kartu_kuning }}</td>
                    <td>{{ $statistic->kartu_merah }}</td>
                    <td>{{ $statistic->tahun }}</td>
                    <td>
                        <a href="{{ route('playerstatistics.edit', $statistic->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('playerstatistics.destroy', $statistic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
