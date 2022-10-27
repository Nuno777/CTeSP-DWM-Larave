<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.header')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        @include('layout.partials.navbar')
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Aprende a criar sites, vídeos e grafismos na ESTG</h1>
                    <h2>O curso académico que te prepara para um futuro promissor na área do Desenvolvimento Web e
                        Multimédia</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#objetivos" class="btn-get-started scrollto">Saber mais</a>
                        <a href="projetos.html" class="btn-watch-video"><i class="bi bi-play-circle"></i><span>Ver
                                projetos desenvolvidos</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        @yield('main')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('layout.partials.footer')
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
