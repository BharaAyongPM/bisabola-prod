<!-- **************** MAIN CONTENT START **************** -->
@extends('home.layouts.tentang')

@section('content')
<main>

    <!-- =======================
    Page Banner START -->
    <section class="pt-5 pb-0" style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6 text-center mx-auto">
                    <!-- Title -->
                    <h6 class="text-primary">Kami disini untuk membantu</h6>
                    <h1 class="mb-4">Kontak Kami</h1>
                </div>
            </div>

            <!-- Contact info box -->
            <div class="row g-4 g-md-5 mt-0 mt-lg-3">
                <!-- Box item -->
                <div class="col-lg-6 mt-lg-0">
                    <div class="card card-body bg-primary shadow py-5 text-center h-100">
                        <!-- Title -->
                        <h5 class="text-white mb-3">Alamat</h5>
                        <ul class="list-inline mb-0">
                            <!-- Address -->
                            <li class="list-item mb-3">
                                <a href="#" class="text-white"> <i class="fas fa-fw fa-map-marker-alt me-2 mt-1"></i>
                                    Jl. Panglima Polim No.116i, RT.01/RW06
                                    Kel. Melawai, Kec. Kebayoran Baru
                                    Jakarta Selatan, Indonesia, 12130
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Box item -->
                <div class="col-lg-6 mt-lg-0">
                    <div class="card card-body shadow py-5 text-center h-100">
                        <!-- Title -->
                        <h5 class="mb-3">Hubungi</h5>
                        <ul class="list-inline mb-0">
                            <!-- Phone number -->
                            <li class="list-item mb-3 h6 fw-light">
                                <a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>+62 896-9901-8355</a>
                            </li>
                            <!-- Email id -->
                            <li class="list-item mb-0 h6 fw-light">
                                <a href="#"> <i class="far fa-fw fa-envelope me-2"></i>info@bisabola.id </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Image and contact form START -->
    <section >
        <div class="container">
            <div class="row g-4 g-lg-0 align-items-center">

                <div class="col-md-6 align-items-center text-center">
                    <!-- Image -->
                    <img src="assets/images/element/contact.svg" class="h-400px" alt="">

                    <!-- Social media button -->
                    <div class="d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4">
                        <h5 class="mb-0">Ikuti kami:</h5>
                        <ul class="list-inline mb-0 ms-sm-2">
                            <li class="list-inline-item"> <a class="fs-5 me-1 text-facebook" href="#"><i class="fab fa-fw fa-facebook-square"></i></a> </li>
                            <li class="list-inline-item"> <a class="fs-5 me-1 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                            <li class="list-inline-item"> <a class="fs-5 me-1 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                            <li class="list-inline-item"> <a class="fs-5 me-1 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                            <!-- <li class="list-inline-item"> <a class="fs-5 me-1 text-dribbble" href="#"><i class="fas fa-fw fa-basketball-ball"></i></a> </li>
                            <li class="list-inline-item"> <a class="fs-5 me-1 text-pinterest" href="#"><i class="fab fa-fw fa-pinterest"></i></a> </li> -->
                        </ul>
                    </div>
                </div>

                <!-- Contact form START -->
                <div class="col-md-6">
                    <!-- Title -->
                    <h2 class="mt-4 mt-md-0">Kritik dan Saran</h2>
                    <p>Kirimkan Kritik dan saran anda untuk kemajuan bisabola.id. Terima Kasih</p>

                    <form>
                        <!-- Name -->
                        <div class="mb-4 bg-light-input">
                            <label for="yourName" class="form-label">Nama Anda *</label>
                            <input type="text" class="form-control form-control-lg" id="yourName">
                        </div>
                        <!-- Email -->
                        <div class="mb-4 bg-light-input">
                            <label for="emailInput" class="form-label">Alamat email *</label>
                            <input type="email" class="form-control form-control-lg" id="emailInput">
                        </div>
                        <!-- Message -->
                        <div class="mb-4 bg-light-input">
                            <label for="textareaBox" class="form-label">Pesan *</label>
                            <textarea class="form-control" id="textareaBox" rows="4"></textarea>
                        </div>
                        <!-- Button -->
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary mb-0" type="button">Kirimkan</button>
                        </div>
                    </form>
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Image and contact form END -->

    <!-- =======================
    Map START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 h-400px grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.13251021614!2d106.79553267418297!3d-6.246263161159578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f16db2d6167b%3A0xa78060d090b8885!2sJl.%20Panglima%20Polim%20No.116i%2C%20Melawai%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012130!5e0!3m2!1sid!2sid!4v1692801346956!5m2!1sid!2sid" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Map END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
    @endsection
