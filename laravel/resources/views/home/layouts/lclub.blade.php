<!DOCTYPE html>
<html lang="en">
<head>
	<title>bisbol</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bisabola.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  asset('assets/vendor/aos/aos.css') }}">
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset(' assets/css/style.css') }}">

	<!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="{{ asset('assets/img/logoku.png') }}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

        		<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll mx-auto">
					<li class="nav-item ">
						<a class="nav-link " href="#" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Beranda</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="/pemain" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Pemain</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="#" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Galeri</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="/club" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Klub</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/liga" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liga</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="index.html">Jakarta Raya League</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Student Holiday</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Liga 2</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Liga 3</a></li>
						</ul>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="#" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Berita</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="#" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Tentang</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="#" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Kontak Kami</a>
					</li>
				</ul>
			</div>
			<!-- Profile START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->


@yield('content')
<!-- =======================
Footer START -->
<footer class="pt-5 bg-light">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-5 col-md-12">
				<!-- logo -->
				<a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src="{{ asset('assets/img/logoku.png') }}" alt="logo">
					<img class="dark-mode-item h-40px" src="{{ asset('assets/images/logo-light.svg') }}" alt="logo">
				</a>
				<p class="my-3">Bisabola.id untuk digitalisasi klub bolamu menjadi lebih efisien, efektif dan terkini. </p>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
			<div class="col-lg-2 col-6">
				<h5 class="mb-2 mb-md-4">Tautan</h5>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Persyaratan Layanan</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Kebijakan Pribadi</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-6">
				<h5 class="mb-2 mb-md-4">Digitalisasi</h5>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link" href="#">Mengikuti Perkembangan Zaman</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Efisiensi Biaya Operasional</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Memberikan Kemudahan</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Sistem yang Terorganisir Baik</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-12">
				<h5 class="mb-2 mb-md-4">Kontak Kami</h5>
				<p>Jl. Panglima Polim No.116i, RT.01/RW06</p>
				<p>Kel. Melawai, Kec. Kebayoran Baru</p>
				<p>Jakarta Selatan, Indonesia, 12130</p>
				<p class="mt-4"><strong>Telepon:</strong> <span>+62 812345678</span></p>
				<p><strong>Email:</strong> <span>info@bisabola.id</span></p>
			</div>
		</div>

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-primary-hover"> &copy; <a href="#" class="text-body">BISABOLA.ID</a>. Hak Cipta Dilindungi oleh Undang-Undang </div>
					<!-- copyright links-->
					<div class=" mt-3 mt-md-0">
						<ul class="list-inline mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									<a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>Bahasa
									</a>
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/id.svg" alt="">Indonesia </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

<!-- Template Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
</body>
</html>
