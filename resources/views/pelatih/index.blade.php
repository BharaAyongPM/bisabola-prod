@extends('admin.layouts.app')

@section('content')
    <h1>Data Pelatih</h1>

    <a href="{{ route('pelatih.tambah') }}" class="btn btn-success mb-2">Tambah Pelatih</a>
    <a href="/pelatih/input" class="btn btn-primary">Tambah Pemain Via Exel</a>

    <table class="table">
        <thead>
            <tr>
                <th>Kode Pelatih</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Lisensi</th>
                {{-- <th>Klub</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelatih as $p)
                <tr>
                    <td>{{ $p->kode_pelatih }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->tanggal_lahir }}</td>
                    <td>{{ $p->lisensi }}</td>
                    {{-- <td>{{ $p->club->nama_club }}</td> --}}
                    <td>
                        <a href="{{ route('pelatih.edit', $p->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pelatih.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus pelatih ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
