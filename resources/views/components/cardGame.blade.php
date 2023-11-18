{{-- Card Show giochi --}}

<div class="card my-2 mx-1 " style="width: 18rem;">
    <img src="{{ Storage::url($game->logo) }}" class="card-img-top mt-1 rounded" style="height: 270px"
        alt="{{ $game->name }}">
    <div class="card-body row">
        <h5 class="card-title">Nome: {{ $game->name }}</h5>
        <h5 class="card-title">Data uscita: {{ $game->data }}</h5>
        <h5 class="card-title">Prodotta da: {{ $game->creator }}</h5>
        <h5 class="text-small">Post creato il: {{ $game->created_at->format('d/m/y') }}</h5>

       <div class="mt-4 border-top  d-flex justify-content-evenly">
            <a href="{{route('game.show', $game)}}" class="texy text-primary ">Dettagli</a>


             @if (Auth::user() && $game->user_id == Auth::user()->id)
                <a href="{{ route('game.edit', $game) }}" class="text text-warning "> Modifica </a>

                 <form action="{{ route('game.delete', $game) }}" method="Post" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" text bg-white border-0 text-decoration-underline text-danger">Elimina</button>
                </form>
            @endif
        </div>

    </div>
</div>
