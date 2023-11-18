<x-leyout>
    <section class="container-fluid col-auto col-md-auto my-2">


        <section class="container  my-5 pt-5">
            <h1 class=" text-center">{{$consol->name}}</h1>
            <div class="row bg-light my-5 btn1 rounded-2">
                <div class="col-12 col-md-5 my-2">
                    <img class="img-fluid rounded " src="{{Storage::url($consol->logo)}}" alt="">
                </div>
                <div class="card-body col-12 col-md-5 ms-2 align-self-end ">
                    <h5 class="card-title mb-1"><b> Prodotta da:</b> {{$consol->creator}}</h5>
                    <h6 class="card-title mb-1"><b> Data di lancio:</b> {{$consol->data}}</h6>
                    {{-- ?? coalescing ci permette di fare un if  --}}
                    <h6 class="card-subtitle my-2 "><b></b>Inserito da: {{$consol->user->name ?? 'Utente Sconosciuto'}}</h6>

                </div>
                <div class="col-12 ">
                    <p class=" my-2 text-capitalize card-text 1h-sm"><b>Descrizione:</b><br> {{$consol->info}}</p>
                    <h5 class="text-small">Post creato il: {{$consol->created_at->format('d/m/y')}} </h5>
                    @if (count($consol->games))
                    <h4>Giocho disponibili</h4>
                    <ul>
                        @foreach ($consol->games as $game )
                        <li>
                            {{$game->name}}, prodotto da {{$game->creator}}
                        </li>

                        @endforeach
                    </ul>


                    @endif


                    <a href="{{url()->previous()}}" class="text-black">Torna indietro</a>

                </div>

            </div>

        </section>
    </section>

</x-leyout>
