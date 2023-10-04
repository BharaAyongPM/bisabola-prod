
@extends('home.layouts.lclub')

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Page content START -->
    <section class="pt-5 pb-0">
        <div class="container">
            <div class="row g-0 g-lg-5">

                <!-- Left sidebar START -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <!-- Instructor image START -->
                <div class="card shadow p-2 mb-4 text-center">
                  <div class="rounded-3">
                    <!-- Image -->
                    @if($club->foto)
        <img src="{{ asset('storage/foto_club/' . $club->foto) }}" class="card-img" alt="course image">
    @else
        <img src="{{ asset('images/default-club.jpg') }}" class="img" alt="Default Foto Klub">
    @endif
                  </div>

                  <!-- Card body -->
                  <div class="card-body px-3">
                    <!-- Rating -->
                    <!-- Social media button -->
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                      <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-instagram-gradient" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                      <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                      <li class="list-inline-item"> <a class="btn px-2 btn-sm bg-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                    </ul>
                    <ul class="list-inline mb-0">
                        <li class=""> <a class="btn btn-sm bg-facebook" href="#">Merchandise<i class="bi bi-cart3 fa-fw"></i></a> </li>
                    </ul>
                  </div>
                </div>
                            <!-- Instructor image END -->
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card card-body shadow p-4 mb-4">

                                <!-- Education START -->
                                <!-- Title -->
                                <h4 class="mb-3">Statistik</h4>

                                <!-- Education item -->
                                <div class="d-flex align-items-center mb-4">
                                    <span class="icon-md text-dark mb-0 bg-light rounded-3"><i class="fas fa-graduation-cap"></i></span>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Liga</h6>
                                        <p class="mb-0 small">Liga 1 Indonesia</p>
                                    </div>
                                </div>

                                <!-- Education item -->
                                <div class="d-flex align-items-center mb-4">
                                    <span class="icon-md text-dark mb-0 bg-light rounded-3"><i class="fas fa-graduation-cap"></i></span>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Top Skor</h6>
                                        <p class="mb-0 small">Harrison Cardoso</p>
                                    </div>
                                </div>

                                <!-- Education item -->
                                <div class="d-flex align-items-center mb-4">
                                    <span class="icon-md text-dark mb-0 bg-light rounded-3"><i class="fas fa-graduation-cap"></i></span>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Pemain Terbaik</h6>
                                        <p class="mb-0 small">Bae Sin Yeong</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row End -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-lg-8">

                    <!-- Title -->
                    <h5 class="mb-0">Klub</h5>
                    <h1 class="mb-0">{{ $club->nama_club }}</h1>
                    <p>Alamat: {{ $club->alamat }}</p>
                    <!-- Book detail START -->
                    <div class="col-12">
                        <!-- Tabs START -->
                        <ul class="nav nav-pills nav-pills-bg-soft px-3" id="book-pills-tab" role="tablist">
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-4" role="presentation">
                                <button class="nav-link mb-0 active" id="book-pills-tab-1" data-bs-toggle="pill" data-bs-target="#book-pills-1" type="button" role="tab" aria-controls="book-pills-1" aria-selected="true">Sejarah</button>
                            </li>
                            <!-- Tab item -->
                            <li class="nav-item me-2 me-sm-4" role="presentation">
                                <button class="nav-link mb-0" id="book-pills-tab-2" data-bs-toggle="pill" data-bs-target="#book-pills-2" type="button" role="tab" aria-controls="book-pills-2" aria-selected="false">Pemain</button>
                            </li>
                            <!-- Tab item -->
                            <!-- <li class="nav-item me-2 me-sm-4" role="presentation">
                                <button class="nav-link mb-0" id="book-pills-tab-3" data-bs-toggle="pill" data-bs-target="#book-pills-3" type="button" role="tab" aria-controls="book-pills-3" aria-selected="false">Shipping Method </button>
                            </li> -->
                        </ul>
                        <!-- Tabs END -->

                        <!-- Tab contents START -->
                        <div class="tab-content pt-4 px-3" id="book-pills-tabContent">
                            <!-- Content START -->
                            <div class="tab-pane fade show active" id="book-pills-1" role="tabpanel" aria-labelledby="book-pills-tab-1">
                                <p class="mt-4">Deskripsi: {{ $club->deskripsi }}</p>
                                <!-- Personal info -->
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i class="fas fa-fw fa-map-marker-alt text-primary me-1 me-sm-3"></i>Stadion:</span>
                                        <span>{{ $club->alamat }}</span>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i class="fas fa-fw fa-envelope text-primary me-1 me-sm-3"></i>Email:</span>
                                        <span>{{ $club->email }}</span>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i class="fas fa-fw fa-headphones text-primary me-1 me-sm-3"></i>No. Telp:</span>
                                        <span>{{ $club->no_telp }}</span>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <span class="h6 fw-light"><i class="fas fa-fw fa-globe text-primary me-1 me-sm-3"></i>Manager</span>
                                        <span>{{ $club->manager }}</span>
                                    </li>
                                </ul>
                                <!-- Counter START -->
                    <div class="row mt-4 g-3">
                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="d-flex align-items-center">
                                <span class="icon-lg text-success mb-0 bg-success bg-opacity-10 rounded-3"><i class="fas fa-play"></i></span>
                                <div class="ms-3">
                                    <div class="d-flex">
                                        <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="3"	data-purecounter-delay="200">0</h5>
                                        <span class="mb-0 h5"></span>
                                    </div>
                                    <p class="mb-0 h6 fw-light">Staff & Manajer</p>
                                </div>
                            </div>
                        </div>
                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="d-flex align-items-center">
                                <span class="icon-lg text-purple bg-purple bg-opacity-10 rounded-3 mb-0"><i class="fas fa-users"></i></span>
                                <div class="ms-3">
                                    <div class="d-flex">
                                        <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="{{ $playerCount }}"	data-purecounter-delay="200">0</h5>
                                        <span class="mb-0 h5"></span>
                                    </div>
                                    <p class="mb-0 h6 fw-light">Total Pemain</p>
                                </div>
                            </div>
                        </div>
                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="d-flex align-items-center">
                                <span class="icon-lg text-orange bg-orange bg-opacity-10 rounded-3 mb-0"><i class="fas fa-trophy"></i></span>
                                <div class="ms-3">
                                    <div class="d-flex">
                                        <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="30" data-purecounter-delay="200">0</h5>
                                        <span class="mb-0 h5">+</span>
                                    </div>
                                    <p class="mb-0 h6 fw-light">Total Prestasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Counter END -->
                            </div>
                            <!-- Content END -->

                            <!-- Content START -->
                            <div class="tab-pane fade" id="book-pills-2" role="tabpanel" aria-labelledby="book-pills-tab-2">
                                <div class="row mb-4 align-items-center">
                                <!-- Book Grid START -->
                                <div class="row g-4">

                                    <!-- Card item START -->
                                    @foreach ($club->players as $player)
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="card shadow h-100">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                @if($player->foto)
                                                <img src="{{ asset('storage/foto_pemain/' . $player->foto) }}" class="card-img-top" alt="book image">
                                                <!-- Overlay -->
                                                <div class="card-img-overlay d-flex z-index-0 p-3">
                                                    <!-- Card overlay Top -->
                                                    <div class="w-100 mb-auto d-flex justify-content-end">
                                                        <!-- Card format icon -->@else
                                                        <img src="{{ asset('storage/foto_pemain/' . $player->foto) }}" class="card-img-top" alt="book image">
                                                        @endif
                                                        <div class="icon-md bg-dark rounded-circle fs-5">
                                                            <a href="#" class="text-white"><i class="">{{ $player->no }}</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body px-3">
                                                <!-- Title -->
                                                <h5 class="card-title mb-0">
                                                    <a href="#" class="stretched-link">{{ $player->nama }}</a>
                                                    {{-- @empty
                                                    <p>Belum ada pemain terdaftar untuk klub ini</p> --}}

                                                </h5>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- Card item END -->@endforeach
                                </div>

                                </div>
                                <!-- Book Grid END -->
                            </div>
                            <!-- Content END -->
                        </div>
                        <!-- Tab contents END -->
                    </div>
                  </div>
                <!-- Main content END -->

            </div><!-- Row END -->

        </div>
    </section>
    <!-- =======================
    Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
