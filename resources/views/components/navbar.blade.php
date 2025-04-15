<nav class="navbar navbar-expand-lg bg-2" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand logo-nav transition mx-3" href="{{ route('homepage') }}"><img src="/media/logo-nav2.png"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                </li>
                @auth
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu drop-custom dropdown-menu-end">
                            @if (Auth::user()->is_admin)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                                </li>
                            @endif
                            @if (Auth::user()->is_revisor)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
                                </li>
                            @endif
                            @if (Auth::user()->is_writer)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard Writer</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.create') }}">Inserisci articolo</a>
                            </li>
                            <a class="dropdown-item text-danger" href="#"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenuto Ospite
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        </ul>
                    </li>
                @endguest
                <form class="d-flex" role="search" action="{{ route('article.search') }}" method="GET">
                    <input class="form-control me-2" type="search" name="query" placeholder="Cerca tra gli articoli"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </ul>
        </div>
</nav>
