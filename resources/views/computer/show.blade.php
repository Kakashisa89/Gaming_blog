<x-leyout>
    <section class="container-fluid col-auto col-md-auto my-2">

        <section class="container  my-5 pt-5">
            <h1 class=" text-center">{{ $computer->model }}</h1>
            <div class="row bg-light my-5 btn1 rounded-2">
                <div class="col-12 col-md-5 my-2">
                    <img class="img-fluid rounded " src="{{ Storage::url($computer->logo) }}" alt="">
                </div>
                <div class="card-body col-12 col-md-5 ms-2 align-self-end ">
                    <h5 class="card-title mb-1"><b> Prodotta da:</b> {{ $computer->creator }}</h5>
                    <h6 class="card-title mb-1"><b> Data di lancio:</b> {{ $computer->data }}</h6>
                    {{-- ?? coalescing ci permette di fare un if  --}}
                    <h6 class="card-subtitle my-2 "><b></b>Inserito da:
                        {{ $computer->user->name ?? 'Utente Sconosciuto' }}</h6>

                </div>
                <div class="col-12 ">
                    <p class=" my-2 text-capitalize card-text 1h-sm"><b>Descrizione:</b><br> {{ $computer->info }}</p>
                    {{-- Funzione che permette di mostrare i giochi disponibili --}}
                    @if (count($computer->games))
                    <h4>Giocho disponibili</h4>
                    <ul>
                        @foreach ($computer->games as $game )
                        <li>
                            {{$game->name}}, prodotto da {{$game->creator}}
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    <h5 class="text-small">Post creato il: {{ $computer->created_at->format('d/m/y') }} </h5>

                    <a href="{{ url()->previous()}}" class="text-black">Torna indietro</a>

                </div>

            </div>

        </section>
    </section>
</x-leyout>
