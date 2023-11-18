<x-leyout>

    <body class="forms"></body>
    <section class="container my-5">
        <div class="row col-12 justify-content-center pt-4">
            <h1 class="text-light display-1 text-center">Inserisci Console</h1>
            <div>
                <a href="{{ route('console.index') }}">
                    <button type="submit" class="btn btn-light ">Indietro</button>
                </a>
            </div>
            <div class="col-12 col-md-4 mt-5 ">


                <form method="POST" action="{{ route('console.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{-- name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nome console</label>
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                            id="name" placeholder="Nome Console">
                        @error('name')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror

                    </div>
                    {{-- creator --}}
                    <div class="mb-3">
                        <label for="creator" class="form-label text-light">Produttore</label>
                        <input type="text" value="{{ old('creator') }}" name="creator" class="form-control"
                            id="creator" placeholder="Produttore">
                        @error('creator')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- data --}}
                    <div class="mb-3">
                        <label for="data" class="form-label text-light">Data uscita</label>
                        <input type="date" name="data" class="form-control" id="data">
                        @error('data')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- logo --}}
                    <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                        @error('logo')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- checbox giochi --}}

                    <div class="form-check mb-3 row">
                        @if ($games->isNotEmpty())
                            <label class="form-label text-light my-3">Giochi disponibili:</label><br>
                            @foreach ($games as $game)
                                <div class="form-check m-1">
                                    <input class="form-check-input" name="games[]" type="checkbox"
                                        value="{{ $game->id }}" id="{{ $game->id }}">
                                    <label class="form-check-label text-light" for="{{ $game->id }}">
                                        {{ $game->name }}
                                    </label>
                                </div>
                            @endforeach
                        @else
                            <h5>Non ci sono giochi <a href="{{ route('game.create') }}"><small>inserisci
                                        Gioco</small></a>
                            </h5>
                        @endif
                    </div>

                    {{-- info --}}
                    <div class="mb-3">
                        <label for="info" class="form-label text-light">Informazioni</label>
                        <textarea class="form-control" name="info" id="info" cols="30" rows="7"
                            placeholder="Inserisci Informazioni"></textarea>

                        @error('info')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-light">Salva</button>
                </form>
            </div>

        </div>
    </section>
</x-leyout>
