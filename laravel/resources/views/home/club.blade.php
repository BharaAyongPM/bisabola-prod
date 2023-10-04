
@extends('home.layouts.app')

@section('content')

<main>

    <!-- =======================
    Page Banner START -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">Semua Klub</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">

            <!-- Filter bar START -->
            <form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
                <div class="row g-3">
                    <!-- Input -->
                    <div class="col-xl-3">
                        <input class="form-control me-1" type="search" placeholder="Kata Kunci">
                    </div>

                    <!-- Select item -->
                    <div class="col-xl-8">
                        <div class="row g-3">
                            <!-- Select items -->
                            <div class="col-sm-6 col-md-6 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                    <option value="">Liga</option>
                                    <option>All</option>
                                    <option>JRL</option>
                                    <option>SHF</option>
                                    <option>Liga1</option>
                                    <option>Liga2</option>
                                    <option>Liga3</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-6 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                    <option value="">Provinsi</option>
                                    <option>All</option>
                                    <option>Jakarta</option>
                                    <option>Tangerang</option>
                                    <option>Jawa Barat</option>
                                </select>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                    <!-- Button -->
                    <div class="col-xl-1">
                        <button type="button" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i class="fas fa-search"></i></button>
                    </div>
                </div> <!-- Row END -->
            </form>
            <!-- Filter bar END -->
            @foreach($clubs as $club)
            <div class="row mt-3">
                <!-- Main content START -->

                <div class="col-12">

                    <!-- Course Grid START -->
                    <div class="row g-4">

                        <!-- Card item START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                @if($club->foto)
                                <img src="{{ asset('storage/foto_club/' . $club->foto) }}" class="card-img-top" alt="course image">
                                @else
                                <img src="{{ asset('images/default-club.jpg') }}"  class="card-img-top" alt="course image">
                        @endif
                                <!-- Card body -->
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <!-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                        <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a> -->
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="{{ route('lihatclub', $club->id) }}">{{ $club->nama_club }}</a></h5>
                                    <!-- Rating star -->
                                    <p>{{ $club->alamat }}</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0"><i class="text-danger me-2"></i></span>
                                        <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>PEMAIN</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Card item END -->

                        @endforeach

                    </div>

                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
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
