use Illuminate\Support\Facades\Storage;
<x-leyout>
    <body class="forms"></body>
    <section class="container my-5">
        <div class="row col-12 justify-content-center pt-4">
            <h1 class="text-light display-1 text-center">Modifica Gioco</h1>
            <div>
                <a href="{{ url()->previous()}}">
                    <button type="submit" class="btn btn-light ">Indietro</button>
                    </a>
            </div>
            <div class="col-12 col-md-4 mt-5 ">


                <form method="POST" action=" {{route('game.update', $game)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- name --}}
                    <div class="mb-3">
                      <label for="name" class="form-label text-light">Nome gioco</label>
                      <input type="text" value="{{$game->name}}" name="name" class="form-control" id="name" placeholder="Nome gioco">
                      @error('name')
                      <p class="text text-alert">{{$message}}</p>

                      @enderror

                    </div>
                    {{-- creator --}}
                    <div class="mb-3">
                      <label for="creator" class="form-label text-light">Produttore</label>
                      <input type="text" value="{{$game->creator}}" name="creator" class="form-control" id="creator" placeholder="Produttore">
                      @error('creator')
                      <p class="text text-alert">{{$message}}</p>

                      @enderror
                    </div>
                    {{-- data --}}
                    <div class="mb-3">
                        <label for="data" class="form-label text-light">Data uscita</label>
                        <input type="date" value="{{$game->data}}" name="data" class="form-control" id="data">
                        @error('data')
                        <p class="text text-alert">{{$message}}</p>

                        @enderror
                      </div>
                      {{--  --}}

                      {{-- logo gia inserito --}}
                      <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <img src="{{Storage::url($game->logo)}}" class="img-fluid rounded" alt="">
                      </div>
                      {{--  --}}

                        {{-- logo da inserire --}}
                    <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo">
                        @error('logo')
                        <p class="text text-alert">{{$message}}</p>
                        @enderror
                      </div>
                      {{--  --}}

                             {{-- checbox console--}}
                    <div class="form-check mb-3 row">
                        <label class="form-label text-light my-3">Console Inserite:</label><br>
                        @foreach ($consol as $consol)
                            <div class="form-check m-1">
                                <input class="form-check-input" name="console[]"  @if($game->consols->contains($consol->id)) checked @endif  type="checkbox"
                                    value="{{ $consol->id }}" id="{{ $consol->id }}">
                                <label class="form-check-label text-light" for="{{ $consol->id }}">
                                    {{ $consol->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    {{-- checbox Computer --}}
                    <div class="form-check mb-3 row">
                        <label class="form-label text-light my-3">Computer Inserite:</label><br>
                        @foreach ($computer as $computers)
                            <div class="form-check m-1">
                                <input class="form-check-input" name="computer[]"  @if($game->computers->contains($computers->id)) checked @endif  type="checkbox"
                                    value="{{ $computers->id }}" id="{{ $computers->id }}">
                                <label class="form-check-label text-light" for="{{ $computers->id }}">
                                    {{ $computers->model }}
                                </label>
                            </div>
                        @endforeach
                    </div>










                     {{-- info --}}
                      <div class="mb-3">
                        <label for="info" class="form-label text-light">Informazioni</label>
                        <textarea class="form-control" name="info" id="info" cols="30" rows="7" placeholder="Inserisci Informazioni">{{$game->info}}</textarea>

                        @error('info')
                        <p class="text text-alert">{{$message}}</p>

                        @enderror
                      </div>



                    <button type="submit" class="btn btn-light">Modifica</button>
                  </form>
            </div>

            </div>
    </section>
</x-leyout>
