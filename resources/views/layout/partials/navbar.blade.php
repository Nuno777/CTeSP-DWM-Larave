<div class="container d-flex align-items-center">

    <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto @if (Route::currentRouteName() == 'index') active @endif"
                    href="{{ route('index') }}">Home</a></li>
            <li><a class="nav-link scrollto" href="index.html#objetivos">Objetivos</a></li>
            <li><a class="nav-link scrollto @if (Route::currentRouteName() == 'planocurricular') active @endif"
                    href="{{ route('planocurricular') }}">Plano Curricular</a></li>
            <li><a class="nav-link scrollto @if (Route::currentRouteName() == 'projetos') active @endif"
                    href="{{ route('projetos') }}">Projetos</a></li>
            <li class="dropdown"><a href="#"><span>Notícias</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="noticias-aulas.html">Aulas</a></li>
                    <li><a href="noticias-publicacoes.html">Publicações</a></li>
                </ul>
            </li>
            <li><a class="nav-link scrollto @if (Route::currentRouteName() == 'contactos') active @endif"
                    href="{{ route('contactos') }}">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
