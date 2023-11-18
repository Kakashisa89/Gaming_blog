
  <header class="container my-5">

    {{-- Semplice body creato per usare CSS --}}
    <body class="consol"></body>
    {{--  --}}

    {{-- Sezione ricerca gioco --}}
    <div class="row col-12 text-center">
        <h1 class="fw-bold text-light"> Sezione Giochi:</h1>
    </div>
    <div class=" row justify-content-center my-4 " role="search">
        <div class="col-5">
            <input class="form-control me-2 " wire:model.live="search" type="text" placeholder="Search"
                aria-label="Search">

        </div>
    </div>
    {{--  --}}



    {{-- sezione messaggio conferma Creazione,Modifica,eliminazione Dela pagina game--}}
    @if (session('gameCreate'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('gameCreate') }}</p>

        </div>
    @elseif (session('gameUpdate'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('gameUpdate')  }}</p>

        </div>
    @elseif (session('gameDelete'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('gameDelete') }}</p>

        </div>
    @endif
    {{--  --}}

    {{-- Sezione inniezione card di creazione del videogioco --}}
    @if ($games->isNotEmpty())
        <div class="col-12 row rounded consol1 ">
            @foreach ($games as $game)
            <x-cardGame :game="$game"/>

            @endforeach

        </div>45
    @else
        <div class="col-12  rounded consol1">
            <h2>Benvenuto nella sezione Videogiochi</h2>
            <p class="text-center fw-bold">Non ci sono ancora Giochi <a href="{{route('game.create')}}">Aggiungi un Gioco</a></p>
        </div>
    @endif
    {{--  --}}




</header>
