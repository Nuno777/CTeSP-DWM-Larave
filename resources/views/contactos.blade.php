@extends('layout.master')
@section('title')
    <title>CTeSP Desenvolvimento Web e Multimédia</title>
@endsection

@section('main')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contactos</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localização:</h4>
                            <p><b>ESTG – Politécnico de Leiria</b></p>
                            <p>Campus 2 – Morro do Lena, Alto do Vieiro, 2411-901 Leiria</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><a href="mailto:coord.dwm.tesp.estg@ipleiria.pt"
                                    target="_blank">coord.dwm.tesp.estg@ipleiria.pt</a></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telefone:</h4>
                            <p>+351 244 820 300</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12272.92798022003!2d-8.8210433!3d39.7344393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcfaf619f4450fa76!2sPolit%C3%A9cnico%20de%20Leiria%20%7C%20ESTG%20-%20Escola%20Superior%20de%20Tecnologia%20e%20Gest%C3%A3o_Edif%C3%ADcio%20D!5e0!3m2!1spt-PT!2spt!4v1664417867129!5m2!1spt-PT!2spt"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="#" method="get" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">O seu Nome</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">O seu E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Assunto</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Mensagem</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">A sua mensagem foi enviada (simulação). Obrigado!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->



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
