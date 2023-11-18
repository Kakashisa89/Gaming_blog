<x-leyout>

    <body class="forms"></body>
    <section class="container my-5">
        <div class="row col-12 justify-content-center pt-4">
            <h1 class="text-light display-1 text-center">Inserisci Gioco</h1>
            <div>
                <a href="{{ route('console.index') }}">
                    <button type="submit" class="btn btn-light ">Indietro</button>
                </a>
            </div>
            <div class="col-12 col-md-4 mt-5 ">


                <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data">
                    @csrf

                    {{-- Nnome gioco --}}
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nome gioco</label>
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                            id="name" placeholder="Nome gioco">
                        @error('name')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror

                    </div>
                    {{--  --}}

                    {{-- Produttore --}}
                    <div class="mb-3">
                        <label for="creator" class="form-label text-light">Produttore</label>
                        <input type="text" value="{{ old('creator') }}" name="creator" class="form-control"
                            id="creator" placeholder="Produttore">
                        @error('creator')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{--  --}}

                    {{-- data uscita --}}
                    <div class="mb-3">
                        <label for="data" class="form-label text-light">Data uscita</label>
                        <input type="date" name="data" class="form-control" id="data">
                        @error('data')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{--  --}}

                    {{-- logo --}}
                    <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                        @error('logo')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{--  --}}
                    {{-- checbox giochi --}}
                    <div class="form-check mb-3 row">
                        @if ($consol->isNotEmpty())
                            <label class="form-label text-light my-3">Console disponibili:</label><br>
                            @foreach ($consol as $console)
                                <div class="form-check m-1">
                                    <input class="form-check-input" name="console[]" type="checkbox"
                                        value="{{ $console->id }}" id="{{ $console->id }}">
                                    <label class="form-check-label text-light" for="{{ $console->id }}">
                                        {{ $console->name }}
                                    </label>
                                </div>
                            @endforeach
                        @else
                            <h5>Inserisci una <a href="{{ route('console.create') }}"><small>Console</small></a></h5>

                        @endif

                    </div>
                    <div class="form-check mb-3 row">
                        @if ($computer->isNotEmpty())
                            <label class="form-label text-light my-3">Computer disponibili:</label><br>
                            @foreach ($computer as $computer)
                                <div class="form-check m-1">
                                    <input class="form-check-input" name="computer[]" type="checkbox"
                                        value="{{ $computer->id }}" id="{{ $computer->id }}">
                                    <label class="form-check-label text-light" for="{{ $computer->id }}">
                                        {{ $computer->model }}
                                    </label>
                                </div>
                            @endforeach
                        @else
                            <h5>Inserisci un <a href="{{ route('computer.create') }}"><small>Computer</small></a></h5>

                        @endif

                    </div>

                    {{-- Informazioni --}}
                    <div class="mb-3">
                        <label for="info" class="form-label text-light">Informazioni</label>
                        <textarea class="form-control" name="info" id="info" cols="30" rows="7"
                            placeholder="Inserisci Informazioni">{{ old('info') }}</textarea>

                        @error('info')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    {{--  --}}



                    <button type="submit" class="btn btn-light">Salva</button>
                </form>
            </div>

        </div>
    </section>
</x-leyout>
