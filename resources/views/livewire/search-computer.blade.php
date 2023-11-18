<header class="container my-5">

    {{-- Semplice body creato per usare CSS --}}

    <body class="consol"></body>
    {{--  --}}

    {{-- Sezione Messagio Iniziale pagina console --}}
    <div class="row col-12 text-center">
        <h1 class="fw-bold text-light"> Sezione Computer :</h1>
    </div>
    <div class=" row justify-content-center my-4 " role="search">
        <div class="col-5">
            <input class="form-control me-2 " wire:model.live="search" type="text" placeholder="Search" aria-label="Search">

        </div>


    </div>
    {{--  --}}

    {{-- sezione messaggio conferma Creazione,Modifica,eliminazione Della console --}}
    @if (session('ComputerCreate'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('computerlCreate') }}</p>

        </div>
    @elseif (session('computerUpdate'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('computerUpdate')  }}</p>

        </div>
    @elseif (session('computerDelete'))
        <div class="alert my-1  bg-light rounded">
            <p class="text-success">{{ session('computerDelete') }}</p>

        </div>
    @endif
    {{--  --}}

    {{-- Sezione inniezione card di creazione delle console --}}
    @if ($computers->isNotEmpty())
        <div class="col-12 row rounded consol1 ">
            @foreach ($computers as $computer)
           <x-cardComputer :computer="$computer"/>
            @endforeach

        </div>
    @else
        <div class="col-12  rounded consol1">
            <h2>Benvenuto nella sezione Computer</h2>
            <p class="text-center fw-bold">Non ci sono ancora computer <a href="{{route('computer.create')}}">Aggiungi computer</a></p>
        </div>
    @endif
    {{--  --}}




</header>

