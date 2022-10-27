@extends('layout.master')
@section('title')
    <title>CTeSP Desenvolvimento Web e Multimédia</title>
@endsection

@section('main')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Projetos Desenvolvidos</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Todos</li>
                <li data-filter=".filter-1ano">1º Ano</li>
                <li data-filter=".filter-2ano">2º Ano</li>
                <li data-filter=".filter-estagio">Estágio</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-1ano">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-estagio">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-1ano">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-2ano">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-estagio">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-1ano">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-2ano">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-2ano">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-estagio">
                    <div class="portfolio-img"><img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Cliens Section -->
@endsection
