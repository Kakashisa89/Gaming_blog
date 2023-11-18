<header class="container my-5">
    {{-- Semplice body creato per usare CSS --}}

    <body class="consol"></body>
    {{--  --}}

    {{-- Sezione Messagio Iniziale pagina console --}}
    <div class="row col-12 text-center">
        <h1 class="fw-bold text-light"> Sezione Console :</h1>
    </div>
    <div class=" row justify-content-center my-4 " role="search">
        <div class="col-5">
            <input class="form-control me-2 " wire:model.live="search" type="text" placeholder="Search" aria-label="Search">

        </div>


    </div>
    {{--  --}}

    {{-- sezione messaggio conferma Creazione,Modifica,eliminazione Della console --}}
    @if (session('consolCreate'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('consolCreate') }}</p>

        </div>
    @elseif (session('consolUpdate'))
        <div class="alert my-1 bg-light rounded">
            <p class="text-success">{{ session('consolUpdate')  }}</p>

        </div>
    @elseif (session('consolDelete'))
        <div class="alert my-1 bg-light rounded">
            <p class="text-success">{{ session('consolDelete') }}</p>

        </div>
    @endif
    {{--  --}}

    {{-- Sezione inniezione card di creazione delle console --}}
    @if ($consols->isNotEmpty())
        <div class="col-12 row rounded consol1 ">
            @foreach ($consols as $consols)
                <x-cardConsol :consol="$consols" />
            @endforeach

        </div>
    @else
        <div class="col-12  rounded consol1">
            <h2>Benvenuto nella sezione console</h2>
            <p class="text-center fw-bold">Non ci sono ancora console <a href="{{route('console.create')}}">Aggiungi Console</a></p>
        </div>
    @endif
    {{--  --}}




</header>
