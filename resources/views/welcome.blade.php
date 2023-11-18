<x-leyout>
    {{-- Body aggiuntivo per background --}}

    <body class="b"> </body>
    <x-videoHome />
    {{-- Card selezione Console Pc Giochi --}}
    <x-selezioneHome />
    {{-- Sezione vetrina --}}
    <section class="container-fluid my-5 rounded-2 border border-primary ">
        <div class=" row filter ">
            <h2 class="text-center text-light fs-1 ">Vetrina ultimi Post aggiunti</h2>

            {{-- vetrina Console --}}
            <div class="row col-12 my-1 ms-1 justify-content-center">
                <h2 class="text-primary  fs-1 fw-bold ">Ultime Console inserite:</h2>
                @if ($consols->isNotEmpty())
                    @foreach ($consols as $consol)
                        <x-cardHome :consol="$consol" />
                    @endforeach
                @else
                    <div class="col-12  rounded consol1 text-white  my-5">
                        <h2 class="text-center fw-bold">Non ci sono ancora console <a
                                href="{{ route('console.create') }}">Aggiungi Console</a></h2>
                    </div>

                @endif
            </div>

            {{-- Vetrina pc --}}
            <div class="row col-12 my-1 ms-1 justify-content-center">
                <h2 class="text-primary border-bottom border-primary fs-1 fw-bold ">Ultimi Pc inseriti:</h2>

                @if ($computer->isNotEmpty())
                    @foreach ($computer as $computer)
                        <x-cardHomepc :computer="$computer" />
                    @endforeach
                @else
                    <div class="col-12  rounded consol1 text-white my-5">
                        <h2 class="text-center fw-bold">Non ci sono ancora computer <a
                                href="{{ route('computer.create') }}">Aggiungi computer</a></h2>
                    </div>

                @endif
            </div>

            {{-- Vetrina Giochi --}}
            <div class="row col-12 my-1 ms-1 justify-content-center">
                <h2 class="text-primary border-bottom border-primary fs-1 fw-bold ">Ultimi Giochi inseriti:</h2>

                @if ($games->isNotEmpty())
                    @foreach ($games as $game)
                        <x-cardHomegame :game="$game" />
                    @endforeach
                @else
                    <div class="col-12  rounded consol1 text-white my-5">
                        <h2 class="text-center fw-bold">Non ci sono ancora giochi <a
                                href="{{ route('game.create') }}">Aggiungi un gioco</a></h2>
                    </div>
                @endif








            </div>



        </div>
    </section>

</x-leyout>
