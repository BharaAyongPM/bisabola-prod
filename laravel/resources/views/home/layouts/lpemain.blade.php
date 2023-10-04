<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bisa Bola</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
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
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
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
						<a class="nav-link " href="/" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Beranda</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="/pemain" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Pemain</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="/club" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Klub</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liga</a>
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
						<a class="nav-link " href="/tentang" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Tentang</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="/kontak" id="demoMenu" data-bs-toggle="" aria-haspopup="true" aria-expanded="false">Kontak Kami</a>
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
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Bisabola.id</span>
          </a>
          <p>Bisabola.id untuk digitalisasi klub bolamu menjadi lebih efisien, efektif dan terkini.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-info"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Persyaratan Layanan</a></li>
            <li><a href="#">Kebijakan Pribadi</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Digitalisasi</h4>
          <ul>
            <li><a href="#">Mengikuti Perkembangan Zaman</a></li>
            <li><a href="#">Efisiensi Biaya Operasional</a></li>
            <li><a href="#">Memberikan Kemudahan</a></li>
            <li><a href="#">Sistem yang Terorganisir Baik</a></li>
            <!-- <li><a href="#">Graphic Design</a></li> -->
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          <p>Jl. Panglima Polim No.116i, RT.01/RW06</p>
          <p>Kel. Melawai, Kec. Kebayoran Baru</p>
          <p>Jakarta Selatan, Indonesia, 12130</p>
          <p class="mt-4"><strong>Telepon:</strong> <span>+62 812345678</span></p>
          <p><strong>Email:</strong> <span>info@bisabola.id</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>2023</span> <strong class="px-1">BISABOLA.ID</strong> <span>Hak Cipta Dilindungi oleh Undang-Undang</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
    <div class="whatsapp-button">
      <a href="https://api.whatsapp.com/send?phone=6281212572061&text=Saya%20Ingin%20Bergabung%20dengan%20Bisabola.id" target="_blank" title="Hubungi melalui WhatsApp">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
