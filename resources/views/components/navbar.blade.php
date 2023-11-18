<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('home') }}">L'angolo del Gaming</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown pe-5">
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profilo</a></li>

                            <li><a class="dropdown-item" id="btn" href="#">Logout</a>
                                <form id="form-id" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>


                    @endauth
                    @guest

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenuto Utente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        </ul>
                    </li>

                @endguest
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @auth
                    @if (Route::currentRouteName() == 'console.index')
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="{{ route('console.create') }}">Inserisci
                                Console</a>
                        </li>
                    @elseif (Route::currentRouteName() == 'computer.index')
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="{{ route('computer.create') }}">Inserisci
                                Computer</a>
                        </li>
                        @elseif (Route::currentRouteName() == 'game.index')
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="{{ route('game.create') }}">Inserisci
                                Gioco</a>
                        </li>
                    @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="#">Contattaci</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
