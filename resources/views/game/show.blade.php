<x-leyout>
    <section class="container-fluid col-auto col-md-auto my-2">


        <section class="container  my-5 pt-5">
            <h1 class=" text-center">{{ $game->name }}</h1>
            <div class="row bg-light my-5 btn1 rounded-2">
                <div class="col-12 col-md-5 my-2">
                    <img class="img-fluid rounded " src="{{ Storage::url($game->logo) }}" alt="">
                </div>
                <div class="card-body col-12 col-md-5 ms-2 align-self-end ">
                    <h5 class="card-title mb-1"><b> Prodotta da:</b> {{ $game->creator }}</h5>
                    <h6 class="card-title mb-1"><b> Data di lancio:</b> {{ $game->data }}</h6>
                    {{-- ?? coalescing ci permette di fare un if  --}}
                    <h6 class="card-subtitle my-2 "><b></b>Inserito da: {{ $game->user->name ?? 'Utente Sconosciuto' }}
                    </h6>

                </div>
                <div class="col-12 ">
                    <p class=" my-2 text-capitalize card-text 1h-sm"><b>Descrizione:</b><br> {{ $game->info }}</p>
                    <h5 class="text-small">Post creato il: {{ $game->created_at->format('d/m/y') }} </h5>
                    @if (count($game->consols))
                        <h4 class="fs-2">Console</h4>
                        <ul>
                            @foreach ($game->consols as $console)
                                <li>
                                    {{ $console->name }}, prodotto da {{ $console->creator }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if (count($game->computers))

                        <h4 class="fs-2">Computer</h4>
                        <ul>
                            @foreach ($game->computers as $computer)
                                <li>
                                    {{ $computer->model }}, prodotto da {{ $computer->creator }}
                                </li>
                            @endforeach
                        </ul>

                    @endif

                    <a href="{{ url()->previous() }}" class="text-black">Torna indietro</a>
                </div>

        </section>
    </section>

</x-leyout>
