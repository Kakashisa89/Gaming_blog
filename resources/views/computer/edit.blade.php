<x-leyout>

    <body class="forms"></body>
    <section class="container my-5">
        <div class="row col-12 justify-content-center pt-4">
            <h1 class="text-light display-1 text-center">Modifica Computer</h1>
            <div>
                <a href="{{ url()->previous()}}">
                    <button type="submit" class="btn btn-light ">Indietro</button>
                </a>
            </div>
            <div class="col-12 col-md-4 mt-5 ">


                <form method="POST" action="{{ route('computer.update', $computer) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="model" class="form-label text-light">Modello computer</label>
                        <input type="text" value="{{ $computer->model }}" name="model" class="form-control"
                            id="model" placeholder="MOdello computer">
                        @error('model')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="creator" class="form-label text-light">Produttore</label>
                        <input type="text" value="{{ $computer->creator }}" name="creator" class="form-control"
                            id="creator" placeholder="Produttore">
                        @error('creator')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label text-light">Data uscita</label>
                        <input type="date" value="{{ $computer->data }}" name="data" class="form-control"
                            id="data">
                        @error('data')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <img src="{{ Storage::url($computer->logo) }}" class="img-fluid rounded" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                        @error('logo')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>
                              {{-- checbox giochi --}}
                              <div class="form-check mb-3 row">
                                <label class="form-label text-light my-3">Giochi Inseriti:</label><br>
                                @foreach ($games as $game)
                                    <div class="form-check m-1">
                                        <input class="form-check-input" name="games[]" @if($computer->games->contains($game->id)) checked @endif type="checkbox"
                                            value="{{ $game->id }}" id="{{ $game->id }}">
                                        <label class="form-check-label text-light" for="{{ $game->id }}">
                                            {{ $game->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                    <div class="mb-3">
                        <label for="info" class="form-label text-light">Informazioni</label>
                        <textarea class="form-control" name="info" id="info" cols="30" rows="7"
                            placeholder="Inserisci Informazioni">{{ $computer->info }}</textarea>

                        @error('info')
                            <p class="text text-alert">{{ $message }}</p>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-light">Modifica</button>
                </form>
            </div>

        </div>
    </section>
</x-leyout>
