@extends('layout.master')
@section('title')
    <title>CTeSP Desenvolvimento Web e Multimédia</title>
@endsection

@section('main')
    <section id="slideshow" class="slideshow">
        <div class="container" data-aos="fade-up">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center mb-5">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-1.jpg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-2.jpg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-3.jpg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-4.jpg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-5.jpg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-6.jpg') }}" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('img/slideshow/slideshow-7.jpg') }}" alt="">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <p>O curso Técnico Superior Profissional em Desenvolvimento Web e Multimédia visa formar profissionais aptos
                para conceber e implementar aplicações e serviços Web com conteúdos multimédia, autonomamente ou em equipa,
                recorrendo às novas tecnologias e ferramentas.</p>
        </div>
    </section>

    <!-- ======= About Us Section ======= -->
    <section id="objetivos" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-8">

                    <div class="section-title">
                        <h2>Objetivos</h2>
                    </div>

                    <ul>
                        <li><i class="ri-check-double-line"></i> Conceber, projetar e desenvolver aplicações e serviços Web;
                        </li>
                        <li><i class="ri-check-double-line"></i> Conceber e produzir conteúdos multimédia;</li>
                        <li><i class="ri-check-double-line"></i> Integrar conteúdos multimédia nas aplicações e serviços
                            Web;</li>
                        <li><i class="ri-check-double-line"></i> Configurar e manter sistemas de gestão de conteúdos;</li>
                        <li><i class="ri-check-double-line"></i> Conceber, implementar e gerir bases de dados;</li>
                        <li><i class="ri-check-double-line"></i> Contactar com clientes para o levantamento de requisitos e
                            acompanhamento do processo de desenvolvimento de projetos;</li>
                        <li><i class="ri-check-double-line"></i> Publicar, administrar e garantir a segurança das aplicações
                            e serviços Web;</li>
                        <li><i class="ri-check-double-line"></i> Elaborar estratégias para gerar notoriedade e visibilidade
                            na Web;</li>
                        <li><i class="ri-check-double-line"></i> Desenvolver a imagem institucional de uma organização e
                            aplicá-la de forma coerente nos diversos meios de comunicação;</li>
                        <li><i class="ri-check-double-line"></i> Gerir projetos e coordenar equipas utilizando ferramentas
                            de trabalho colaborativo</li>
                        <li><i class="ri-check-double-line"></i> Acompanhar a evolução tecnológica e as tendências no
                            design, bem como dar resposta aos desafios emergentes dos pontos de vista comercial,
                            organizativo e social.</li>

                    </ul>
                </div>

                <div class="col-lg-4 pt-4 pt-lg-0 text-center">

                    <div class="section-title">
                        <h2>Informações</h2>
                    </div>

                    <p>
                        <b>Código</b><br />
                        4509
                    </p>
                    <p>
                        <b>Escola</b><br />
                        Tecnologia e Gestão
                    </p>
                    <p>
                        <b>Cidade</b><br />
                        Leiria
                    </p>
                    <p>
                        <b>Idioma</b><br />
                        Português
                    </p>
                    <p>
                        <b>Regime</b><br />
                        Diurno
                    </p>
                    <p>
                        <b>Duração</b><br />
                        2 Anos
                    </p>
                    <p>
                        <b>Vagas</b><br />
                        Contingente Geral: 50 / Internacional: 2 / Mudança de Par Instituição/Curso: 4
                    </p>
                    <p>
                        <b>Registo DGES</b><br />
                        <a href="https://www.dges.gov.pt/pt/pesquisa_cursos_instituicoes?plid=372&instituicao=Instituto%20Polit%C3%A9cnico%20de%20Leiria&cursos=Desenvolvimento%20Web%20e%20Multim%C3%A9dia&distrito=&tipo_ensino=&tipo_estabelecimento=&area=&tipo_curso=7"
                            target="_blank">Informação de registo</a>
                    </p>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Ajudamos-te a esclarecer <strong>as tuas questões</strong> sobre o nosso curso</h3>
                        <p>
                            Tens alguma uestão sobre o Curso TeSP de Desenvolvimento Web e Multimédia? Verifica aqui se te
                            conseguimos ajudar:
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>01</span> Qual a duração do curso? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        O curso é composto por 4 semestres (2 anos).
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>02</span> Existe estágio nos dois anos? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        O estágio curricular decorre no 4º semestre, com duração de 180 horas.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("{{ asset('img/why-us.png') }}");' data-aos="zoom-in" data-aos-delay="150">
                    &nbsp;
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
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
