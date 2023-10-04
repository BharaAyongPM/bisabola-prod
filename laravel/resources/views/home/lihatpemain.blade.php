@extends('home.layouts.lpemain')

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Page Banner START -->
    <section class="pt-0">
        <!-- Main banner background image -->
        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <!-- Profile banner START -->
                <div class="col-12">
                    <div class="card bg-transparent card-body p-0">
                        <div class="row d-flex justify-content-between">
                            <!-- Avatar -->
                            <div class="col-auto mt-4 mt-md-0">
                                <div class="avatar avatar-xxl mt-n3">
                                    @if($player->foto)
								<img class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ asset('storage/foto_pemain/' . $player->foto) }}" alt="">
								@else
								<img class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ asset('storage/foto_pemain/' . $player->foto) }}" alt="">
								@endif
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <h1 class="my-1 fs-4">{{ $player->nama }} <i class=""></i></h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>{{ $player->posisi }}</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>{{ $player->tanggal_lahir }}</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>{{ $player->alamat }}</li>
                                    </ul>
                                </div>
                                <!-- Button -->
                                <div class="d-flex align-items-center mt-2 mt-md-0">
                                    <a href="#" class="btn btn-success mb-0">{{ $player->club->nama_club }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile banner END -->

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
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
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <nav class="navbar navbar-light navbar-expand-xl mx-0">
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header bg-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-3 p-xl-0">
                                <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Data Pemain</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Data Performa</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Riwayat Transfer</a>
                                          </div>
                                        <!-- <div class="col-8 col-sm-9">
                                          <div class="tab-content pt-0" id="v-pills-tabContent">

                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                We pride ourselves on the service we give to our clients. Our friendly team members are always willing to help you understand your present technology requirements and provide suggestions on your future needs. It can be the packaging of an item or the design of its website and Applications.
                                              </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                Eduport an innovative Internet marketing solutions company that offers comprehensive web development, SMO services, SEO strategies and various other types of Internet marketing related services. With us at your side, you will find the IT solution to achieve your strategic and financial goals.
                                              </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                Our friendly team members are always willing to help you understand your present technology requirements and provide suggestions on your future needs. It can be the packaging of an item or the design of its website and Applications. We pride ourselves on the service we give to our clients.
                                              </div>
                                          </div>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">

                    <!-- Card START -->
                    <div class="card border bg-transparent rounded-3">
                        <div class="tab-content pt-0" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                               <!-- Main content START -->
                                <div class="card bg-transparent border rounded-3">
                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <!-- Form -->
                                        <form class="row g-4">
                                            <!-- Full name -->
                                            <div class="col-12">
                                                <label class="form-label">Nama</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="{{ $player->nama }}" placeholder="First name" readonly>
                                                </div>
                                            </div>
                                            <!-- Username -->
                                            <div class="col-md-6">
                                                <label class="form-label">Kode</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="{{ $player->player_code }}" readonly>
                                                </div>
                                            </div>
                                            <!-- Email id -->
                                            <div class="col-md-6">
                                                <label class="form-label">Kota Kelahiran</label>
                                                <input class="form-control" value="{{ $player->tempat_lahir }}"  placeholder="Email" readonly>
                                            </div>
                                            <!-- Phone number -->
                                            <div class="col-md-6">
                                                <label class="form-label">Tinggi</label>
                                                <input type="text" class="form-control" value="{{ $player->tinggi }} CM" placeholder="Phone number" readonly>
                                            </div>

                                            <!-- Location -->
                                            <div class="col-md-6">
                                                <label class="form-label">Posisi</label>
                                                <input class="form-control" type="text" value="{{ $player->posisi }}" readonly>
                                            </div>
                                            <!-- About me -->
                                            <div class="col-12">
                                                <label class="form-label">Alamat</label>
                                                <input class="form-control" type="text" value="{{ $player->alamat }}" readonly>
                                            </div>

                                            <!-- Education -->
                                            <!-- <div class="col-12">
                                                <label class="form-label">Education</label>
                                                <input class="form-control mb-2" type="text" value="Bachelor in Computer Graphics">
                                                <input class="form-control mb-2" type="text" value="Masters in Computer Graphics">
                                                <button class="btn btn-sm btn-light mb-0"><i class="bi bi-plus me-1"></i>Add more</button>
                                            </div> -->
                                        </form>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                            </div>
                            <!-- Edit profile END -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="card-body">
                                    <!-- Search and select START -->
                                    <div class="row g-3 align-items-center justify-content-between mb-4">
                                        <!-- Search -->
                                    </div>
                                    <!-- Search and select END -->

                                    <!-- Order list table START -->
                                    <div class="table-responsive border-0">
                                        <!-- Table START -->
                                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">Musim</th>
                                                    <th scope="col" class="border-0">Kompetisi</th>
                                                    <th scope="col" class="border-0">Klub</th>
                                                    <th scope="col" class="border-0">Gol</th>
                                                    <th scope="col" class="border-0 rounded-end">Assist</th>
                                                    <th scope="col" class="border-0">Yellow/Double Yellow/Red</th>
                                                    <th scope="col" class="border-0">Durasi</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                <!-- Table item -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <h6 class="table-responsive-title mt-2 mt-lg-0 mb-0"><a href="#">22/23</a></h6>
                                                    </td>

                                                    <!-- Table data -->
                                                    <td class="text-center text-sm-start text-primary-hover">
                                                        <a href="#" class="text-body"><u>Liga 1 Indonesia</u></a>
                                                    </td>

                                                    <!-- Table data -->
                                                    <td>Persita Tangerang</td>

                                                    <!-- Table data -->
                                                    <td>2</td>

                                                    <!-- Table data -->
                                                    <td>3</td>

                                                    <td>3/1/0</td>

                                                    <!-- Table data -->
                                                    <td>760'</td>
                                                </tr>
                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                        <!-- Table END -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card-body">
                                    <!-- Search and select START -->
                                    <div class="row g-3 align-items-center justify-content-between mb-4">
                                        <!-- Search -->
                                    </div>
                                    <!-- Search and select END -->

                                    <!-- Order list table START -->
                                    <div class="table-responsive border-0">
                                        <!-- Table START -->
                                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">Nama Klub</th>
                                                    <th scope="col" class="border-0">Tahun Masuk</th>
                                                    <th scope="col" class="border-0">Musim</th>
                                                    <th scope="col" class="border-0">Dari</th>
                                                    <th scope="col" class="border-0 rounded-end">Harga</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                <!-- Table item -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <h6 class="table-responsive-title mt-2 mt-lg-0 mb-0"><a href="#">Borneo FC</a></h6>
                                                    </td>

                                                    <!-- Table data -->
                                                    <td class="text-center text-sm-start text-primary-hover">
                                                        <a href="#" class="text-body"><u>2019</u></a>
                                                    </td>

                                                    <!-- Table data -->
                                                    <td>3 Musim</td>

                                                    <!-- Table data -->
                                                    <td>AGMK Olmaliq</td>

                                                    <!-- Table data -->
                                                    <td>3,48 Mlyr</td>
                                                </tr>
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <h6 class="table-responsive-title mt-2 mt-lg-0 mb-0"><a href="#">Persita Tangerang</a></h6>
                                                    </td>

                                                    <!-- Table data -->
                                                    <td class="text-center text-sm-start text-primary-hover">
                                                        <a href="#" class="text-body"><u>2023</u></a>
                                                    </td>

                                                    <!-- Table data -->
                                                    <td>Sekarang</td>

                                                    <!-- Table data -->
                                                    <td>Borneo FC</td>

                                                    <!-- Table data -->
                                                    <td>6,08 Mlyr</td>
                                                </tr>
                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                        <!-- Table END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row END -->
                </div>
        </section>
    <!-- =======================
    Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
