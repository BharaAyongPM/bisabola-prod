@extends('home.layouts.lpemain')

@section('content')
<main>

    <!-- =======================
    Page Banner START -->
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-dark p-4 text-center rounded-3">
                        <h1 class="text-white m-0">Pemain</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->
    <!-- =======================
    Inner part START -->
    <section class="pt-4">
        <div class="container">
            <!-- Search option START -->
            <div class="row mb-4 align-items-center">
                <!-- Search bar -->
                <div class="col-sm-6 col-xl-4">
                    <form class="border rounded p-2">
                        <div class="input-group input-borderless">
                            <input class="form-control me-1" type="search" placeholder="Cari Pemain">
                            <button type="button" class="btn btn-primary mb-0 rounded"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

			<!-- Select option -->
                <div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
                    <form class="border rounded p-2 input-borderless">
                        <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm">
                            <option value="">Kategori</option>
                            <option>Semua</option>
                            <option>Penjaga Gawang</option>
                            <option>Bek Tengah</option>
                            <option>Bek Sayap</option>
                            <option>Gelandang Bertahan</option>
                            <option>Gelandang Tengah</option>
                            <option>Gelandang Serang</option>
                            <option>Penyerang Sayap</option>
                            <option>Penyerang Kedua</option>
                            <option>Penyerang Depan</option>
                        </select>
                    </form>
                </div>

			<!-- Select option -->
            <div class="col-sm-6 col-xl-3 mt-3 mt-xl-0">
                <label for="filter_club"></label>
                <form  action="{{ route('pemain') }}" method="GET" class="border rounded p-2 input-borderless">
                    <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm" name="club_id" id="filter_club">

                        <option value="">Semua Klub</option>
                        @foreach ($clubs as $club)
                            <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                        @endforeach
                    </select>



            </div>

        <!-- Button -->
            <div class="col-sm-6 col-xl-2 mt-3 mt-xl-0 d-grid">
                <button type="submit" class="btn btn-lg btn-primary mb-0">Hasil Filter</button>
            </div></form>
        </div>
        <!-- Search option END -->
            <!-- Course List table START -->
            <div class="row">
                <div class="col-12">
                    <div class="card border bg-transparent rounded-3 mt-5">
                        <!-- Card header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <h3 class="mb-2 mb-sm-0">Daftar Pemain</h3>
                            </div>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">
                            <div class="table-responsive border-0 rounded-3">
                                <!-- Table START -->
                                <table class="table table-dark-gray align-middle p-4 mb-0">
                                    <!-- Table head -->
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Nama Pemain</th>
                                            <th scope="col" class="border-0">Klub</th>
                                            <th scope="col" class="border-0">Posisi</th>
                                            <th scope="col" class="border-0">Kode Pemain<</th>
                                            <th scope="col" class="border-0 rounded-end">Kota</th>
                                        </tr>
                                    </thead>
                                    <!-- Table body START -->
                                    <tbody>
                                        <!-- Table item --> @foreach ($players as $player)
                                        <tr>
                                            <!-- Course item -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-60px">
                                                        <img src="{{ asset('storage/foto_pemain/' . $player->foto) }}" class="rounded" alt="">
                                                    </div>
                                                    <!-- Title -->
                                                    <h6 class="mb-0 ms-2 table-responsive-title">
                                                        <a href="{{ route('lihatpemain', $player->id) }}">{{ $player->nama }}</a>
                                                    </h6>
                                                </div>
                                            </td>
                                            <!-- Selling item -->
                                            <td>{{ $player->club->nama_club }}</td>
                                            <!-- Amount item -->
                                            <td>{{ $player->posisi }}</td>
                                            <!-- Period item -->
                                            <td>
                                                <span class="badge bg-primary bg-opacity-10 text-primary">{{ $player->player_code }}</span>
                                            </td>
                                            <!-- Action item -->
                                            <td>
                                                {{ $player->kota }}
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!-- Table item -->

                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                                <!-- Table END -->
                            </div>

                            <!-- Pagination -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-3">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start"></p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item mb-0 active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Card body START -->
                    </div>
                </div>
            </div>
            <!-- Course List table END -->
        </div>
    </section>

</main>

@endsection
